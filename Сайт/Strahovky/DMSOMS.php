<?php
require '../db/db.php';

// Форма оформления страховки

$data = $_POST;
if (isset($data['enter_d']))
{
        $errors = array();

        if (trim ($data['name_d']) == '') {
            $errors[] = 'Введите ФИО!';
        }
        if (trim ($data['email_d']) == '')
        {
            $errors[] = 'Введите email!';
        }
        if (trim ($data['car_d']) == '')
        {
            $errors[] = 'Введите Номер ТС!';
        }
        if (trim ($data['phone_d']) == '')
        {
            $errors[] = 'Введите номер телефона!';
        }
        if (trim ($data['message_d']) == '')
        {
            $errors[] = 'Введите cообщение!';
        }

        if (empty ($errors))
        {
            //R::freeze (true);
            if ($_SESSION['logged_user'])
            {
                $reg = $_SESSION['logged_user']->id;
            }else{
                $reg = '';
            }

            $vzg = R::dispense('vzg');
            $vzg->name = $data['name_d'];
            $vzg->phone = $data['phone_d'];
            $vzg->email = $data['email_d'];
            $vzg->car = $data['car_d'];
            $vzg->message = $data['message_d'];
            $vzg->id_u = $reg;
            $vzg->dor = date("d/m/Y");
            R::store($vzg);
            header('Location: done.php');

        }
}

require '../header.php'; ?>
    <div class="contact-clean">
        <form method="post">
            <h2 class="text-center">Заявка на оформление&nbsp;</h2>
            <? if (!empty($errors))
                {
                    
                    echo '<br>' . '<div style="color: red;">'. array_shift($errors).'</div>';
                }
            ?>
            <div class="form-group"><input class="form-control" type="text" name="name_d" value="<?= $_SESSION['logged_user']->name ?? '' ?>" placeholder="ФИО"></div>
            <div class="form-group"><input class="form-control" type="text" name="car_d" value="<?= $_POST['car_k'] ?? '' ?>" placeholder="Номер ТС"></div>
            <div class="form-group"><input class="form-control" type="tel" placeholder="Номер телефона" name="phone_d" value='<?= $_SESSION['logged_user']->phone ?? '' ?>'></div>
            <div class="form-group"><input class="form-control" type="email" name="email_d" value="<?= $_SESSION['logged_user']->email ?? '' ?>" placeholder="Email"><!-- <small class="form-text text-danger">Пожалуйста введите корректный адрес&nbsp;электронной почты<br></small> --></div>
            <div class="form-group"><textarea class="form-control" name="message_d" value="<?= $_POST['message_k'] ?? '' ?>" placeholder="Опишите свой случай" rows="14"></textarea></div>
            <div class="form-group"><button name="enter_d" class="btn btn-primary" type="submit">Отправить</button></div>
        </form>
    </div>
    <? require "../footer.php";?>
<?php
require '../db/db.php';

// Форма оформления страховки

$data = $_POST;
if (isset($data['enter_l']))
{
        $errors = array();

        if (trim ($data['name_l']) == '') {
            $errors[] = 'Введите ФИО!';
        }
        if (trim ($data['email_l']) == '')
        {
            $errors[] = 'Введите email!';
        }
        if (trim ($data['phone_l']) == '')
        {
            $errors[] = 'Введите номер телефона!';
        }
        if (trim ($data['message_l']) == '')
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

            $life = R::dispense('life');
            $life->name = $data['name_l'];
            $life->phone = $data['phone_l'];
            $life->email = $data['email_l'];
            $life->message = $data['message_l'];
            $life->id_u = $reg;
            $life->dor = date("d/m/Y");
            R::store($life);
            header('Location: done.php');

        }
}


require '../header.php'; ?>
    <div class="contact-clean">
        <form method="post">
            <h2 class="text-center">Страховка жизни</h2>
            <? if (!empty($errors))
                {
                    
                    echo '<br>' . '<div style="color: red;">'. array_shift($errors).'</div>';
                }
            ?>
            <div class="form-group"><input class="form-control" type="text" name="name_l" value="<?= $_SESSION['logged_user']->name ?? '' ?>" placeholder="ФИО"></div>  
            <div class="form-group"><input class="form-control" type="tel" placeholder="Номер телефона" name="phone_l" value='<?= $_SESSION['logged_user']->phone ?? '' ?>'></div>
            <div class="form-group"><input class="form-control is-invalid" type="email" name="email_l" value="<?= $_SESSION['logged_user']->email ?? '' ?>" placeholder="Email"><small class="form-text text-danger">Пожалуйста введите корректный адрес&nbsp;электронной почты<br></small></div>
            <div class="form-group"><textarea class="form-control" name="message_l" value="<?= $_POST['message_l'] ?? '' ?>" placeholder="Опишите свой случай" rows="14"></textarea></div>
            <div class="form-group"><button class="btn btn-primary" name="enter_l" type="submit">Отправить</button></div>
        </form>
    </div>
    <? require "../footer.php";?>
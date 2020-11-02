<?php 
require '../db/db.php';

$data = $_POST;

// Проверка заполнения полей формы и внесение данный в БД

if (isset($data['enter_c']))
{
        $errors = array();

        if (trim ($data['name_c']) == '') {
            $errors[] = 'Введите ФИО!';
        }
        if (trim ($data['email_c']) == '')
        {
            $errors[] = 'Введите email!';
        }
        if (trim ($data['message_c']) == '')
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

            $vzg = R::dispense('consult');
            $vzg->name = $data['name_c'];
            $vzg->email = $data['email_c'];
            $vzg->message = $data['message_c'];
            $vzg->id_u = $reg;
            $vzg->dor = date("d/m/Y");
            R::store($vzg);
            header('Location: ../Strahovky/done.php');

        }
}
require '../header.php'; 
?>
    <div class="contact-clean">
        <form method="post">
            <h2 class="text-center">Задайте вопрос&nbsp;</h2>
            <? if (!empty($errors))
                {
                    
                    echo '<br>' . '<div style="color: red;">'. array_shift($errors).'</div>';
                }
            ?>
            <div class="form-group"><input class="form-control" type="text" name="name_c" value="<?= $_SESSION['logged_user']->name ?? '' ?>" placeholder="ФИО"></div>
            <div class="form-group"><input class="form-control is-invalid" type="email" name="email_c" value="<?= $_SESSION['logged_user']->email ?? '' ?>" placeholder="Email"><small class="form-text text-danger">Пожалуйста введите корректный адрес&nbsp;электронной почты<br></small></div>
            <div class="form-group"><textarea class="form-control" name="message_c" value="<?= $_POST['message_c'] ?? '' ?>" placeholder="Опишите свой случай" rows="14"></textarea></div>
            <div class="form-group"><button name="enter_c" class="btn btn-primary" type="submit">Отправить</button></div>
        </form>
    </div>
    <? require "../footer.php";?>
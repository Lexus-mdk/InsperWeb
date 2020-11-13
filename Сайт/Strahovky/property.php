<?php 
require '../db/db.php';

// Форма оформления страховки

     
$data = $_POST;
if (isset($data['enter_p']))
{
        $errors = array();

        if (trim ($data['name_p']) == '') {
            $errors[] = 'Введите ФИО!';
        }
        if (trim ($data['email_p']) == '')
        {
            $errors[] = 'Введите email!';
        }
        if (trim ($data['phone_p']) == '')
        {
            $errors[] = 'Введите номер телефона!';
        }
        if (trim ($data['message_p']) == '')
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

            $property = R::dispense('property');
            $property->name = $data['name_p'];
            $property->phone = $data['phone_p'];
            $property->email = $data['email_p'];
            $property->message = $data['message_p'];
            $property->id_u = $reg;
            $property->dor = date("d/m/Y");
            R::store($property);
            header('Location: done.php');

        }
}


require '../header.php'; 
     
?>
    <div class="contact-clean">
        <form method="post">
            <h2 class="text-center">Страховка имущества</h2>
            <? if (!empty($errors))
                {
                    
                    echo '<br>' . '<div style="color: red;">'. array_shift($errors).'</div>';
                }
            ?>
            <div class="form-group"><input class="form-control" type="text" name="name_p" value="<?= $_SESSION['logged_user']->name ?? '' ?>" placeholder="ФИО"></div>
            <div class="form-group"><input class="form-control" type="tel" placeholder="Номер телефона" name="phone_p" value='<?= $_SESSION['logged_user']->phone ?? '' ?>'></div>
            <div class="form-group"><input class="form-control" type="email" name="email_p" value="<?= $_SESSION['logged_user']->email ?? '' ?>" placeholder="Email"><!-- <small class="form-text text-danger">Пожалуйста введите корректный адрес&nbsp;электронной почты<br></small> --></div>
            <div class="form-group"><textarea class="form-control" name="message_p" value="<?= $_POST['message_p'] ?? '' ?>" placeholder="Опишите свой случай" rows="14" ></textarea></div>
            <div class="form-group"><button class="btn btn-primary" type="submit" name="enter_p">Отправить</button></div>
        </form>
    </div>
<? require "../footer.php";?>
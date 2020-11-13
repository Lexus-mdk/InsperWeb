<?php 
require '../db/db.php';


// Форма оформления страховки

$data = $_POST;
if (isset($data['enter_o']))
{
        $errors = array();

        if (trim ($data['name_o']) == '') {
            $errors[] = 'Введите ФИО!';
        }
        if (trim ($data['email_o']) == '')
        {
            $errors[] = 'Введите email!';
        }
        if (trim ($data['phone_o']) == '')
        {
            $errors[] = 'Введите номер телефона!';
        }
        if (trim ($data['message_o']) == '')
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

            $other = R::dispense('other');
            $other->name = $data['name_o'];
            $other->phone = $data['phone_o'];
            $other->email = $data['email_o'];
            $other->message = $data['message_o'];
            $other->id_u = $reg;
            $other->dor = date("d/m/Y");
            R::store($other);
            header('Location: done.php');

        }
}





require '../header.php'; 
?>
    <div class="contact-clean">
        <form method="post">
            <h2 class="text-center">Частный случай</h2>
            <? if (!empty($errors))
                {
                    
                    echo '<br>' . '<div style="color: red;">'. array_shift($errors).'</div>';
                }
            ?>
            <div class="form-group"><input class="form-control" type="text" name="name_o" value="<?= $_SESSION['logged_user']->name ?? '' ?>" placeholder="ФИО"></div>
            <div class="form-group"><input class="form-control" type="tel" placeholder="Номер телефона" name="phone_o" value='<?= $_SESSION['logged_user']->phone ?? '' ?>'></div>
            <div class="form-group"><input class="form-control" type="email" name="email_o" value="<?= $_SESSION['logged_user']->email ?? '' ?>" placeholder="Email"><!-- <small class="form-text text-danger">Пожалуйста введите корректный адрес электронной почты</small> --></div>
            <div class="form-group"><textarea class="form-control" name="message_o" value="<?= $_POST['message_o'] ?? '' ?>" placeholder="Опишите свой случай" rows="14"></textarea></div>
            <div class="form-group"><button class="btn btn-primary" name= 'enter_o' type="submit">Отправить</button></div>
        </form>
    </div>
   <? require "../footer.php";?>
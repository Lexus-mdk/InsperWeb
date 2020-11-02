<?php 
require '../db/db.php';

// Форма оформления страховки

$data = $_POST;
if (isset($data['enter_k']))
{
    $errors = array();

        if (trim ($data['name_k']) == '') {
            $errors[] = 'Введите ФИО!';
        }
        if (trim ($data['email_k']) == '')
        {
            $errors[] = 'Введите email!';
        }
        if (trim ($data['car_k']) == '')
        {
            $errors[] = 'Введите Номер ТС!';
        }
        if (trim ($data['phone_k']) == '')
        {
            $errors[] = 'Введите номер телефона!';
        }
        if (trim ($data['message_k']) == '')
        {
            $errors[] = 'Введите Сообщение!';
        }
        if (empty ($errors))
        {
            if ($_SESSION['logged_user'])
            {
                $nick = $_SESSION['logged_user']->id;
            }else{
                $nick = '';
            }
                
            $kasko = R::dispense('kasko');
            $kasko->name = $data['name_k'];
            $kasko->phone = $data['phone_k'];
            $kasko->email = $data['email_k'];
            $kasko->car = $data['car_k'];
            $kasko->message = $data['message_k'];
            $kasko->id_u = $nick;
            $kasko->dor = date("d/m/Y");
            R::store($kasko);
            header('Location: done.php');
    }
}


?>
<?php require '../header.php'; ?>
    <div class="contact-clean">
        <form method="post">
            <h2 class="text-center">Заявка на оформление Каско</h2>
            <? if (!empty($errors))
                {
                    
                    echo '<br>' . '<div style="color: red;">'. array_shift($errors).'</div>';
                }
            ?>
            <div class="form-group"><input class="form-control" type="text" name="name_k" value="<?= $_SESSION['logged_user']->name ?? '' ?>" placeholder="ФИО"></div>
            <div class="form-group"><input class="form-control" type="text" name="car_k" value="<?= $_POST['car_k'] ?? '' ?>" placeholder="Номер ТС"></div>
            <div class="form-group"><input class="form-control" type="tel" placeholder="Номер телефона" name="phone_k" value='<?= $_SESSION['logged_user']->phone ?? '' ?>'></div>
            <div class="form-group"><input class="form-control is-invalid" type="email" name="email_k" value="<?= $_SESSION['logged_user']->email ?? '' ?>" placeholder="Email"><small class="form-text text-danger">Пожалуйста введите корректный адрес электронной почты<br></small></div>
            <div class="form-group"><textarea class="form-control" name="message_k" value="<?= $_POST['message_k'] ?? '' ?>" placeholder="Опишите свой случай" rows="14"></textarea></div>
            <div class="form-group"><button  name="enter_k" class="btn btn-primary" type="submit">Отправить</button></div>
        </form>
    </div>
    <? require "../footer.php";?>
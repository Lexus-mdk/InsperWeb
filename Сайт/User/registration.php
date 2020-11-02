<?php 
require '../db/db.php';

// Регистрация на сайте

$data = $_POST;
if (isset($data['sign_up']))
{
        $errors = array();

        
        if (trim ($data['email']) == '')
        {
            $errors[] = 'Введите email!';
        }
        if (trim ($data['nick']) == '')
        {
            $errors[] = 'Введите Логин!';
        }
        if (trim ($data['phone']) == '')
        {
            $errors[] = 'Введите номер телефона!';
        }
         if ($data['password'] == '')
        {
            $errors[] = 'Введите пароль!';
        }
         if ($data['password-repeat'] != $data['password'])
        {
            $errors[] = 'Повторный пароль не верен!';
        }
        if (trim ($data['name']) == '') {
            $errors[] = 'Введите ФИО!';
        }
        if (R::count ('users', "email = ?", array($data['email'])) >0)
        {
            $errors[] = 'Пользователь с таким email уже существует';
        }

        if (empty ($errors))
        {
            R::freeze (true);

            $user = R::dispense('users');
            $user->nick = $data['nick'];
            $user->name = $data['name'];
            $user->phone = $data['phone'];
            $user->email = $data['email'];
            $user->password = password_hash($data['password'], PASSWORD_DEFAULT);
            $user->role = 'user';
            $user->dor = date("d/m/Y");
            R::store($user);
            header('Location: login.php');

        }
}



// if (!empty($_POST['sign_up'])) {
//     $Controller = new MainController();
//     $Controller->Reg();
// }

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>strahovky</title>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Aclonica">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alfa+Slab+One">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Archivo+Black">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora">
    <link rel="stylesheet" href="../assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="../assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/fonts/line-awesome.min.css">
    <link rel="stylesheet" href="../assets/fonts/typicons.min.css">
    <link rel="stylesheet" href="../assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="../assets/css/Article-Clean.css">
    <link rel="stylesheet" href="../assets/css/Article-List.css">
    <link rel="stylesheet" href="../assets/css/Contact-Form-Clean.css">
    <link rel="stylesheet" href="../assets/css/Features-Boxed.css">
    <link rel="stylesheet" href="../assets/css/Footer-Clean.css">
    <link rel="stylesheet" href="../assets/css/Highlight-Blue.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/css/swiper.min.css">
    <link rel="stylesheet" href="../assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="../assets/css/Map-Clean.css">
    <link rel="stylesheet" href="../assets/css/Navigation-with-Button.css">
    <link rel="stylesheet" href="../assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="../assets/css/Simple-Slider.css">
    <link rel="stylesheet" href="../assets/css/styles.css">
    <link rel="stylesheet" href="../assets/css/Testimonials.css">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-md navigation-clean-button">
        <div class="container"><a class="navbar-brand" href="../firstpage.html" style="font-size: 29px;">Insper</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div
                class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav mr-auto">
                    <li class="nav-item" role="presentation"></li>
                    <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#" style="color: rgb(70,87,101);">Страхование</a>
                        <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="../Strahovky/Osago1.php">ОСАГО</a><a class="dropdown-item" role="presentation" href="../Strahovky/kaskO.php">КАСКО</a><a class="dropdown-item" role="presentation" href="../Strahovky/property.php">Имущество</a>
                            <a
                                class="dropdown-item" role="presentation" href="../Strahovky/DMSOMS.php">ДМС/ОМС</a><a class="dropdown-item" role="presentation" href="../Strahovky/life.php">Жизнь</a><a class="dropdown-item" role="presentation" href="../Strahovky/other.html">Частный случай</a></div>
                    </li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="../news.php">Новости</a></li>
                    <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#">Обратная связь</a>
                        <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="../Communication/reviews.php">Отзывы</a><a class="dropdown-item" role="presentation" href="../Communication/asks.php">Вопросы</a><a class="dropdown-item" role="presentation"
                                href="../Communication/consultation.php">Консультация</a></div>
                    </li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="../Communication/contacts.php">Контакты</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="../Communication/aboutUs.php">О нас</a></li>
                </ul><span class="navbar-text actions"> <a class="btn btn-light action-button" role="button" href="login.php">Войти</a></span></div>
        </div>
    </nav>
    <div class="register-photo">
        <div class="form-container">
            <form action="registration.php" method="post">
                <h2 class="text-center" style="color: #1e6add;"><strong>Создать аккаунт</strong></h2>
                <? if (!empty($errors))
                {
                    
                    echo '<br>' . '<div style="color: red;">'. array_shift($errors).'</div>';
                }
                ?>
                <div class="form-row">
                    <div class="col">
                        <div class="form-group"><input class="form-control" type="email" name="email" value="<?= $_POST['email'] ?? '' ?>" placeholder="Email"></div>
                        <div class="form-group"><input class="form-control" type="password" name="password" value="<?= $_POST['password'] ?? '' ?>" placeholder="Пароль"></div>
                        <div class="form-group"><input class="form-control" type="password" name="password-repeat" placeholder="Повторите пароль"></div>
                    </div>
                    <div class="col">
                        <div class="form-group"><input class="form-control" type="text" placeholder="Логин" name="nick" value="<?= $_POST['nick'] ?? '' ?>"></div>
                        <div class="form-group"><input class="form-control" type="text" placeholder="ФИО" name="name" value="<?= $_POST['name'] ?? '' ?>"></div>
                        <div class="form-group"><input class="form-control" type="tel" placeholder="Номер телефона" name="phone" value="<?= $_POST['phone'] ?? '' ?>"></div>
                    </div>
                </div>
                <!-- <div class="form-group">
                    <div class="form-check"><label class="form-check-label"><input class="form-check-input" type="checkbox">Я согласен с пользовательским соглашением</label></div>
                </div> -->
                <div class="form-group"><button name="sign_up" class="btn btn-primary btn-block" type="submit" style="background-color: #1e6add;">Зарегистрироваться</button></div><a class="already" href="logIn.html">Уже имеете аккаунт на Insper.ru?</a></form>
        </div>
    </div>
    <? require "../footer.php";?>



    
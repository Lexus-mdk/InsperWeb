<?php
require "../db/db.php";

// Форма входа в личный кабинет (авторизация)

$data = $_POST;
    if (isset ($data['sign_in']))
    {
        $errors = array();
       $user = R::findOne('users', 'email = ?', array($data['email']));
        if ($user)
        {
            if (password_verify($data['password'], $user->password))
            {
                
               $_SESSION['logged_user'] = $user; 
                 if ($_SESSION['logged_user']->role=='user')
                {
                header('Location: profile.php'); 

                }elseif($_SESSION['logged_user']->role=='admin')
                {
                header('Location: ../Admin/usersTable.php');
                }
                
            }else
            {
                $errors[] = 'Неверно введен пароль';
            }
        }else 
        {
            $errors[] = 'Пользователь с таким email не найден';
        }
    }
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
        <div class="container"><a class="navbar-brand" href="../First/firstpage.php" style="font-size: 29px;">Insper</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div
                class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav mr-auto">
                    <li class="nav-item" role="presentation"></li>
                    <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#" style="color: rgb(70,87,101);">Страхование</a>
                        <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="../Strahovky/Osago1.php">ОСАГО</a><a class="dropdown-item" role="presentation" href="../Strahovky/kaskO.php">КАСКО</a><a class="dropdown-item" role="presentation" href="../Strahovky/property.php">Имущество</a>
                            <a
                                class="dropdown-item" role="presentation" href="../Strahovky/DMSOMS.html">ДМС/ОМС</a><a class="dropdown-item" role="presentation" href="../Strahovky/life.php">Жизнь</a><a class="dropdown-item" role="presentation" href="../Strahovky/other.html">Частный случай</a></div>
                    </li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="../news.html">Новости</a></li>
                    <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#">Обратная связь</a>
                        <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="../Communication/reviews.php">Отзывы</a><a class="dropdown-item" role="presentation" href="../Communication/asks.php">Вопросы</a><a class="dropdown-item" role="presentation"
                                href="../Communication/consultation.php">Консультация</a></div>
                    </li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="../Communication/contacts.php">Контакты</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="../Communication/aboutUs.php">О нас</a></li>
                </ul><span class="navbar-text actions"> <a class="btn btn-light action-button" role="button" href="registration.php">Зарегестрироваться</a></span></div>
        </div>
    </nav>
    <div class="login-clean">
        <form method="post">
            <h2 class="sr-only">Login Form</h2>
            <div class="illustration">
                <h1 style="color: #1e6add;">Вход на Insper.ru</h1>
            </div>
            <? if (!empty($errors))
                {
                    
                    echo '<br>' . '<div style="color: red;">'. array_shift($errors).'</div>';
                }
            ?>
            <div class="form-group"><input class="form-control" type="email" name="email" value="<?= $_POST['email'] ?? '' ?>" placeholder="Email"></div>
            <div class="form-group"><input class="form-control" type="password" name="password" value="<?= $_POST['password'] ?? '' ?>" placeholder="Пароль"></div>
            <div class="form-group"><button name="sign_in" class="btn btn-primary btn-block" type="submit" style="background-color: #1e6add;">Войти</button></div><a class="forgot" href="#">Забыли пароль?</a></form>
    </div>
    <? require "../footer.php";?>
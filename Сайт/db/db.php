<?php
// Подключение библиотеки RedBean для работы с базой данных
require 'rb.php';
// Начало сессии
R::setup('mysql:host=localhost;dbname=rtk_db', 'root', '');
session_start();
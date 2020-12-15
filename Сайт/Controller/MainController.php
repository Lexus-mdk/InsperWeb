<?php
namespace Controller;

use Model\Registration;
use View\View;

class MainController 
{
	// private $data;

	// public function __construct()
	// {
		
	// }

	public function Reg()
	{
		$data = $_POST;
		$errors = array();
		require '../db/db.php';

	    if (trim ($data['nick']) == '')
	    {
	        $errors[] = 'Введите nick!';
	    }
	    if (trim ($data['name']) == '') {
	    	$errors[] = 'Введите ФИО!';
	    }
	    if (trim ($data['email']) == '')
	    {
	        $errors[] = 'Введите email!';
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
	    // if (R::count ('users', "email = ?", array($data['email'])) >0)
	    // {
	    //     $errors[] = 'Пользователь с таким email уже существует';
	    // }

	    if (empty ($errors))
	    {
	    	$model = new Registration($data['nick'], $data['name'], $data['phone'], $data['email'], $data['password']);
			$model->Reg();
	    }else
	    {
	        $view = new View($errors);
	        $view->Reg();
	    }
			
	}
}
<?php
namespace Model;

use View\View;

class Registration 
{
	private $nick;

	private $name;

	private $phone;

	private $email;

	private $pass;

	public function __construct($nick, $name, $phone, $email, $pass)
	{
		$this->nick = $nick;
		$this->name = $name;
		$this->phone = $phone;
		$this->email = $email;
		$this->pass = $pass;
	}

	public function Reg()
	{
		require '../db/db.php';
        $user = R::dispense('users');
        $user->nick = $this->nick;
        $user->name = $this->name;
        $user->phone = $this->phone;
        $user->email = $this->email;
        $user->password = password_hash($this->pass, PASSWORD_DEFAULT);
        $user->role = 'user';
        $user->dor = date("d/m/Y");
        R::store($user);
        $view = new View('true');
        $view->Reg();

    }
	
}
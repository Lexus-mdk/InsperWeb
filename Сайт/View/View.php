<?php

// Проба ООП (ничего не получилось, файл забракован)

namespace View;

class View
{
	private $what;

	public function __constract ($what)
	{
		$this->what = $what;
	}

	public function Reg ()
	{
		if ($this->what == 'true') {
			include '../User/login.php';
		}else{
			echo '<div style="color: red;">'. array_shift($this->what).'</div><hr>';
			include '../User/registration.php';
		}
	}
}
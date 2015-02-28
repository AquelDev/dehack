<?php namespace controllers;
use \core\view;
use \core\controller;
use \PDO;

class Login extends Controller {

	public function __construct() {
		parent::__construct();
	}

	public function post() {
		if (isset($_POST['login'])) {
			$username = $_POST['username'];
			$password = hash('ripemd160', $_POST['password']);
			$obj = \helpers\database::get()->select("SELECT `id`, `password` FROM `de_users` WHERE `username` = :username AND `password` = :password", array(':username' => $username, ':password' => $password), PDO::FETCH_ASSOC);
			if (count($obj) == 1) {
				\helpers\session::set('user_id', $obj[0]['id']);
				header("Location: /home");
			}
		}
	}
}
?>
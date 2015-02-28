<?php namespace controllers;
use \core\view;
use \core\controller;
use \PDO;

class Browse extends Controller {

	public function __construct() {
		parent::__construct();
	}

	public function post() {
		if (isset($_POST['ip'])) {
			$ip = $_POST['ip'];
			$data['ip'] = new \models\user();
			if ($ip == "10.1.252.10") {
				echo "<h2>Welcome</h2><br />
      This is the first server ever created in the game. This is also here you will find the first couple of servers, that you will be able to hack.";
			} else {
				if ($data['ip']->fillByIp($ip)) {
					echo "Basic server <font color='green'><strong>online</strong></font>.";
				} else {
					echo "Server not found";
				}
			}
		}
	}
}
?>
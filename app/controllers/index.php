<?php namespace controllers;
use core\view;

class Index extends \core\controller {

	public function __construct() {
		parent::__construct();
		if (\helpers\session::get('user_id')) {
			header("Location: /home");
		}
		$this->language->load('index');
	}

	public function home() {
		$data['welcome'] = $this->language->get('welcome_text');
		View::render('dehack/index', $data);
	}
}
?>
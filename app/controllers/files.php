<?php namespace controllers;
use \core\view;
use \core\controller;

class Files extends Controller {

	public function __construct() {
		parent::__construct();
	}

	public function index() {
		$data['user'] = new \models\user();
		$data['user']->fillById(\helpers\session::get('user_id'));
		View::rendertemplate('header', $data);
		View::render('dehack/files', $data);
		View::rendertemplate('footer', $data);
	}
}
?>
<?php namespace controllers;
use core\view;

/*
 * Profile controller
 *
 * @author David Carr - dave@daveismyname.com - http://www.daveismyname.com
 * @version 2.1
 * @date June 27, 2014
 */
class Software extends \core\controller{

	/**
	 * Call the parent construct
	 */
	public function __construct(){
		parent::__construct();
		$this->language->load('software');
	}

	/**
	 * Define Index page title and load template files
	 */
	public function index() {
		$data['user'] = new \models\user();
		$data['user']->fillById(\helpers\session::get('user_id'));
		View::rendertemplate('header', $data);
		View::render('dehack/software', $data);
		View::rendertemplate('footer', $data);
	}
}

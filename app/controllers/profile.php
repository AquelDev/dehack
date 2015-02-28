<?php namespace controllers;
use core\view;

/*
 * Profile controller
 *
 * @author David Carr - dave@daveismyname.com - http://www.daveismyname.com
 * @version 2.1
 * @date June 27, 2014
 */
class Profile extends \core\controller {
	
	/**
	 * Call the parent construct
	 */
	public function __construct(){
		parent::__construct();
		$this->language->load('profile');
	}

	/**
	 * Define Index page title and load template files
	 */
	public function index($u) {
		$data['user'] = new \models\user();
		$data['user']->fillById(\helpers\session::get('user_id'));
		$data['pUser'] = new \models\user();
		$data['pUser']->fillById($u);

		View::rendertemplate('header', $data);
		View::render('dehack/profile', $data);
		View::rendertemplate('footer', $data);
	}
}

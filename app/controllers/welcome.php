<?php namespace controllers;
use core\view;

/*
 * Welcome controller
 *
 * @author David Carr - dave@daveismyname.com - http://www.daveismyname.com
 * @version 2.1
 * @date June 27, 2014
 */
class Welcome extends \core\controller{

	/**
	 * Call the parent construct
	 */
	public function __construct(){
		parent::__construct();
		$this->language->load('welcome');
	}

	/**
	 * Define Index page title and load template files
	 */
	public function index() {
		$data['user'] = new \models\user();
		$data['user']->fillById(\helpers\session::get('user_id'));
		for ($i = 0; $i < count($data['user']->getServers()); $i++) {
			$data['server'][$i] = $data['user']->getServers()[$i];
		}
		$data['pro'] = 0;
        $data['hdd'] = 0;
        $data['mem'] = 0;
        for ($i = 0; $i < count($data['user']->getServers()); $i++) {
        	$data['pro'] += $data['server'][$i]->getPro();
        	$data['hdd'] += $data['server'][$i]->getHdd();
	        $data['mem'] += $data['server'][$i]->getMem();
       	}
		$data['pro'] = number_format($data['pro'], 1);
        $data['hdd'] = number_format($data['hdd'] / 1024, 1);
        $data['mem'] = number_format($data['mem'] / 1024, 1);
       	$data['con'] += $data['user']->getCon() / 1000;
       	$data['ext'] += number_format($data['user']->getExt() / 1024, 1);
		View::rendertemplate('header', $data);
		View::render('dehack/welcome', $data);
		View::rendertemplate('footer', $data);
	}
}

<?php namespace core;
use core\view,
	core\language;

/*
 * controller - base controller
 *
 * @author David Carr - dave@daveismyname.com - http://www.daveismyname.com
 * @version 2.1
 * @date June 27, 2014
 */

abstract class Controller {
	
	/**
	 * view variable to use the view class
	 * @var string
	 */
	public $view;
	public $language;
	private $db;

	/**
	 * on run make an instance of the config class and view class
	 */
	public function __construct(){
		$this->db = \helpers\database::get();
		
		//initialise the views object
		$this->view = new View();
		
		//initialise the language object
		$this->language = new Language();
	}


    /**
     * Gets the value of db.
     *
     * @return mixed
     */
    public function getDb()
    {
        return $this->db;
    }
}

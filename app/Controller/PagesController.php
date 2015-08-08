<?php

App::uses('AppController', 'Controller');

class PagesController extends AppController {

	public $uses = array(
	'Category',
	'Comment',
	'Topic',
	'User'
	);

	public function index() {
		$topics = $this -> Topic -> find('all');
		//var_dump($topics);
		$this -> set('watasu',$topics);
		//$topicsという名前で受けたものを$watasuという変数にしてviewに渡す

	}

	public function detail() {

	}

}



<?php
App::uses('AppController', 'Controller');



class TopicsController extends AppController {

	public $components = array('Session');

	public $uses = array(
	'Category',
	'Comment',
	'Topic',
	'User'
	);

    public function index(){
    	$user = $this->Auth->user();
		$topics = $this->Topic->find('all', array(
			'conditions' => array('Topic.user_id' => $user['id'])));
		$this->set('topics', $topics);

	}

	public function add() {
		if ($this -> request -> is('post')){

			$this -> Topic -> create();
			//$this -> request -> data['Topic']['category_id'] = 1;
			$this -> request -> data['Topic']['user_id'] = 1;
			if($this -> Topic -> save($this -> request -> data)){
				$this -> redirect('/');
			}

		}

		$categories = $this -> Category -> find('list');
		$this -> set('categories',$categories);
		
	}

	public function edit() {

	}

	public function delete($id = null) { //カッコ内は初期値の設定

		if($this -> Topic -> delete($id)){
			$this -> Session ->setFlash('成功しました');
		}else{
			$this -> Session ->setFlash('失敗しました');
		}
		
		$this -> redirect('/');
	}
}

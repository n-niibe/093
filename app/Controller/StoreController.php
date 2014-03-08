<?php

App::uses('Controller', 'Controller');

class StoreController extends Controller {
	public $autoRender = false;
	
	public function register(){
		$this->loadModel('Users');
		
		if($this->request->is('post')){
			$store_name = $this->request->data['store_name'];
			$store_name = 'hoge';//TODO debug
		
			$this->Users->save(array(
    			'name'=>$store_name,
			));
		}
	}
	
	public function choice(){
		$this->loadModel('Wants');
		$this->loadModel('Store');
		
		$this->set('sore_list',$this->Store->find('all'));
		
		if($this->request->is('post')){
			$soret_id = $this->request->data['soret_id'];
		
			$user_id = 1; //TODO
		
			$this->Users->save(array(
				'user_id'=>$user_id,
    			'store_id'=>$soret_id,
			));
		}
	}

	public function notice(){
		$this->loadModel('Notices');
		
		if($this->request->is('post')){
			$soret_id = $this->request->data['soret_id'];
			$sale_date = $this->request->data['sale_date'];
			$comment = $this->request->data['comment'];
		
			$this->Users->save(array(
				'soret_id'=>$soret_id,
    			'sale_date'=>$sale_date,
    			'comment'=>$comment,
			));
		}
	}
	
	public function lookup(){
		$this->loadModel('Notices');
		
		$user_id = 1;//TODO
		
		$joins = array(
			array(
				'type'=>'inner',
				'table'=>'wants',
				'alias'=>'Wants',
				'conditions'=>array(
					'Notice.store_ed = Wants.store_id',
				),
			),
		);
		
		if($this->request->is('post')){
			$this->find('all',array(
				'joins'=>$joins,
				'conditions'=>array('Want.user_id'=>$user_id)
			));
		}
	}
}

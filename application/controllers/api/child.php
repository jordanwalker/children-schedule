<?php defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH.'/libraries/REST_Controller.php';

class Child extends REST_Controller {
	function __construct() {
        parent::__construct();
	}
	/*
	 * CREATE
	 */
	function create_post(){
		$package = array(
			'id'=>'',
			'unique'=>'123w',
			'name'=>$this->post('name'),
			'birthday'=>$this->post('birthday'),
			'gender'=>$this->post('gender'),
			'eye_color'=>$this->post('eye_color'),
			'hair_color'=>$this->post('hair_color'),
			'height'=>$this->post('height'),
			'weight'=>$this->post('weight'),
			'biography'=>$this->post('biography'),
			'public'=>$this->post('public'),
		);
		
		self::_create($package);
		$this->response($package, 200); // 200 being the HTTP response code
	} 
	
	private function _create($package){
		return $this->db->insert('child',$package);
	}
}
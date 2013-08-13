<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Add extends MY_Controller {
	
	function __construct(){
        parent::__construct();
	}
	public function index(){
		$this->load->view('child/view_add',$this->data);
	}
}

/* End of file add.php */
/* Location: ./application/controllers/child/add.php */
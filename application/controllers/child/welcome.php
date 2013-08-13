<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends MY_Controller {
	function __construct()
    {
        parent::__construct();
    }
	public function index()
	{
		$this->load->view('view_welcome',$this->data);
	}
	
	public function add(){
		/* template */
		$this->data['head_title'] = "Add";
		$this->load->view('child/view_add',$this->data);
	}
	
	public function set(){}
	public function get(){}
}

/* End of file child.php */
/* Location: ./application/controllers/child.php */
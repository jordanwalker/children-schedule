<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Help extends MY_Controller {
	function __construct()
    {
        parent::__construct();
    }
	public function index()
	{
		$this->load->view('help/view_index',$this->data);
	}
	
	public function patient_assessment(){
		$this->load->view('help/view_patient_assessment',$this->data);
	}
	public function set(){}
	public function get(){}
}

/* End of file watch.php */
/* Location: ./application/controllers/watch.php */
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sleep extends MY_Controller {
	function __construct()
    {
        parent::__construct();
    }
	public function index()
	{
		$this->load->view('child/view_sleep',$this->data);
	}
	public function set(){}
	public function get(){}
}

/* End of file sleep.php */
/* Location: ./application/controllers/sleep.php */
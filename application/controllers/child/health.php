<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Health extends MY_Controller {
	function __construct()
    {
        parent::__construct();
    }
	public function index()
	{
		$this->load->view('child/view_health',$this->data);
	}
	public function set(){}
	public function get(){}
}

/* End of file health.php */
/* Location: ./application/controllers/health.php */
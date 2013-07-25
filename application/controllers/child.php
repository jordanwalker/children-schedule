<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Child extends MY_Controller {
	function __construct()
    {
        parent::__construct();
    }
	public function index()
	{
		$this->load->view('view_welcome');
	}
	public function set(){}
	public function get(){}
}

/* End of file child.php */
/* Location: ./application/controllers/child.php */
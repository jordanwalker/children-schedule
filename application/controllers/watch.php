<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Watch extends MY_Controller {
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

/* End of file watch.php */
/* Location: ./application/controllers/watch.php */
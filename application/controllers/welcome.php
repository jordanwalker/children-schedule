<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends MY_Controller {
	function __construct()
    {
        parent::__construct();
    }
	public function index()
	{
		$this->load->view('welcome_message');
	}
	
	public function set(){}
	public function get(){}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
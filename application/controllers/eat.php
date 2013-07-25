<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Eat extends MY_Controller {
	function __construct()
    {
        parent::__construct();
    }
	public function index()
	{
		$this->load->view('view_welcome',$this->data);
	}
	public function set(){}
	public function get(){}
}

/* End of file eat.php */
/* Location: ./application/controllers/eat.php */
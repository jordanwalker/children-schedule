<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Food extends MY_Controller {

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

/* End of file food.php */
/* Location: ./application/controllers/food.php */
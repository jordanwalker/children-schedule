<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Change extends MY_Controller {
	function __construct()
    {
        parent::__construct();
    }
	public function index()
	{
		$this->load->view('child/view_change',$this->data);
	}
	public function set(){}
	public function get(){}
}

/* End of file change.php */
/* Location: ./application/controllers/change.php */
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Play extends MY_Controller {
	function __construct()
    {
        parent::__construct();
		
		if (!$this->ion_auth->logged_in())
		{
			redirect('auth/login', 'refresh');
		}
    }
	public function index() 
	{
		$this->load->view('child/view_play',$this->data);
	}
}
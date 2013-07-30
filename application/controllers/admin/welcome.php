<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends MY_Controller {
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
		/* template */
		$this->data['head_title'] = "Dashboard";
		$this->load->view('admin/view_index',$this->data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
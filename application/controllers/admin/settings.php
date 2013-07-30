<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Settings extends MY_Controller {
	function __construct()
    {
        parent::__construct();
		// must be signed in
		if (!$this->ion_auth->logged_in()){
			redirect('auth/login', 'refresh');
		}
    }
	public function index()
	{
		/* template */
		$this->data['head_title'] = "Settings";
		$this->load->view('admin/view_settings',$this->data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
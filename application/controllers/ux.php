<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Ux extends MY_Controller {
	public function __construct()
	{
		parent::__construct();
		
	}
	public function index()
	{
		/* template */
		$this->data['head_title'] = "Dashboard";
		$this->load->view('ux/index_view',$this->data);
	}
	
	public function activity(){
		/* template */
		$this->data['head_title'] = "Activity";
		$this->load->view('ux/activity',$this->data);
	}
	
	public function blank(){
		/* template */
		$this->data['head_title'] = "Blank";
		$this->load->view('ux/blank',$this->data);
	}
	public function dashboard(){
		/* template */
		$this->data['head_title'] = "Dashboard";
		$this->load->view('ux/dashboard',$this->data);
	}
	public function files(){
		/* template */
		$this->data['head_title'] = "Files";
		$this->load->view('ux/files',$this->data);
	}
	public function gallery(){
		$this->data['script'][] = base_url().'assets/ux/js/gallery.js';
		$this->data['head_title'] = "Gallery";
		$this->load->view('ux/gallery',$this->data);
	}
	public function help(){
		$this->data['head_title'] = "Help";
		$this->load->view('ux/help',$this->data);
	}
	public function help_inner(){
		$this->data['head_title'] = "Help Inner";
		$this->load->view('ux/help_inner',$this->data);
	}
	public function login(){
		$this->data['head_title'] = "Login";
		$this->load->view('ux/login',$this->data);
	}
	public function messages(){
		$this->data['head_title'] = "Messages";
		$this->load->view('ux/messages',$this->data);
	}
	public function profile(){
		$this->data['head_title'] = "Profile";
		$this->load->view('ux/profile',$this->data);
	}
	public function projects(){
		$this->data['head_title'] = "Projects";
		$this->load->view('ux/projects',$this->data);
	}
	public function settings(){
		$this->data['head_title'] = "Settings";
		$this->load->view('ux/settings',$this->data);
	}
	public function tasks(){
		$this->data['head_title'] = "Tasks";
		$this->load->view('ux/tasks',$this->data);
	}
	public function snippits(){
		$this->data['css'][] = base_url().'assets/ux/css/pricing.css';
		/* template */
		$this->data['head_title'] = "Tasks";
		$this->data['html_head'] = $this->load->view('ux/html_head',$this->data,TRUE);
		$this->data['html_close'] = $this->load->view('ux/html_close',$this->data,TRUE);
		$this->load->view('ux/snippits',$this->data);
	}
	
	
	public function wizard(){
		$this->data['css'][] = base_url().'assets/fuelux/dist/css/fuelux.min.css';
		$this->data['css'][] = base_url().'assets/fuelux/dist/css/fuelux-responsive.min.css';
		
		$this->data['script'][] = base_url().'assets/fuelux/lib/require.js';
		$this->data['script'][] = base_url().'assets/fuelux/dist/loader.js';
		$this->data['script'][] = base_url().'assets/fuelux/dist/all.js';
		$this->data['script'][] = base_url().'assets/js/wizard.js';
		
		/* template */
		$this->data['head_title'] = "Wizard";
		$this->data['html_head'] = $this->load->view('ux/html_head',$this->data,TRUE);
		$this->data['html_close'] = $this->load->view('ux/html_close',$this->data,TRUE);
		$this->load->view('ux/wizard',$this->data);
	}
	
	
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */
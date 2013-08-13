<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller {
	var $data = array();
	
	function __construct() {
        parent::__construct();
		
		#ION AUTH
		if ($this->ion_auth->logged_in()) {
			$this->data['user'] = $this->ion_auth->user()->row();
		}
	
		#BOOTSTRAP
		/* css */
		$this->data['css'] = array(
			base_url().'assets/bootstrap/docs/assets/css/bootstrap.css',
			base_url().'assets/bootstrap/docs/assets/css/bootstrap-responsive.css',
		);
		/* js */
		$this->data['script'] = array(
			base_url().'assets/jquery/dist/jquery.min.js',
			base_url().'assets/bootstrap/docs/assets/js/bootstrap.min.js',
			base_url().'assets/js/main.js',
		);
		
		/* template */
		$this->data['head_title'] = array();
		$this->data['html_head'] = $this->load->view('global/html_head',$this->data,TRUE);
		$this->data['nav_bar'] = $this->load->view('global/nav_bar', $this->data, TRUE);
		$this->data['nav_aside'] = $this->load->view('global/nav_aside', $this->data, TRUE);
		$this->data['html_close'] = $this->load->view('global/html_end',$this->data,TRUE);
	}
}
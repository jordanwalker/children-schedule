<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Crop extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->data['css'][] = base_url().'assets/jQuery-File-Upload/css/jquery.fileupload-ui.css';
		
		$this->data['html_head'] = $this->load->view('global/html_head',$this->data,TRUE);
	}
	
	public function index(){
		$this->load->view('upload/crop',$this->data);
	}
	
	public function save_crop(){
		$this->load->library('image_lib');
		$config['image_library'] = 'gd2';
			
		// get the width and height of the preview container image #target
		$resize_config['width'] = str_replace('px','',$this->input->post('targetW'));
        $resize_config['height'] = str_replace('px','',$this->input->post('targetH'));
		$resize_config['source_image'] = './uploads/companies/products_services/' . $this->input->post('image_name');
		$resize_config['new_image'] = './uploads/companies/resize/' . $this->input->post('image_name');
		$this->image_lib->initialize($resize_config);
		
		if ( ! $this->image_lib->resize() ){
			echo $this->image_lib->display_errors();
		}

		$this->image_lib->clear();
		
        $crop_config['source_image'] = './uploads/companies/resize/' . $this->input->post('image_name');
        $crop_config['new_image'] = './uploads/companies/crop/' . $this->input->post('image_name');
		$crop_config['width'] = 260;
		$crop_config['height'] = 202;
		$crop_config['maintain_ratio'] = FALSE;
	    $crop_config['dynamic_output'] = TRUE;
		
		$targetX = $this->input->post('targetX');
		$targetY = $this->input->post('targetY');
		
		$targX = str_replace('px','', $targetX);
		$targY = str_replace('px','', $targetY);
		
		$crop_config['x_axis'] = abs($targX);
		$crop_config['y_axis'] = abs($targY);
		
		$this->image_lib->initialize($crop_config);

        if(!$this->image_lib->crop()) {
            echo $this->image_lib->display_errors();
        } else {
            echo "Success";
        }
		
	}
}
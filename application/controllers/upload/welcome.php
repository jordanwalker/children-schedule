<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends MY_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->data['css'][] = base_url().'assets/jQuery-File-Upload/css/jquery.fileupload-ui.css';
		
		$this->data['html_head'] = $this->load->view('global/html_head',$this->data,TRUE);
	}

	public function index()
	{
		
		$this->load->view('upload/form',$this->data);
	}

	public function do_upload()
	{
		$upload_path_url = base_url().'assets/uploads/';
		$config['upload_path'] = FCPATH.'assets/uploads/';
		$config['allowed_types'] = 'jpg|png';
		$config['max_size'] = '30000';
		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload()) {
			$error = array('error' => $this->upload->display_errors());
			echo json_encode(array($error));

		} else {
			$data = $this->upload->data();
				
			// to re-size for thumbnail images un-comment and set path here and in json array
			$config = array(
					'image_library' => 'gd2',
					'source_image' => FCPATH.'assets/uploads/'.$data['file_name'],
					'create_thumb'=>TRUE,
					'new_image' => FCPATH.'assets/uploads/thumbnails/'.$data['file_name'],
					'maintain_ration' => false,
					'width' => 150,
					'height' => 150
			);
				
			$this->load->library('image_lib', $config);
			$this->image_lib->resize();
				
			if (!$this->image_lib->resize())
			{
				echo $this->image_lib->display_errors();
			}

			//set the data for the json array
			$info->name = $data['file_name'];
			$info->size = $data['file_size'];
			$info->type = $data['file_type'];
			$info->url = $upload_path_url .$data['file_name'];
				
			// I set this to original file since I did not create thumbs.  change to thumbnail directory if you do = $upload_path_url .'/thumbs' .$data['file_name']
			$info->thumbnail_url = $upload_path_url .$data['file_name'];
			$info->delete_url = base_url().'upload/deleteImage/'.$data['file_name'];
			$info->delete_type = 'DELETE';
				
			//this is why we put this in the constants to pass only json data
			if (IS_AJAX) {
				echo json_encode(array($info));
				//this has to be the only data returned or you will get an error.
				//if you don't give this a json array it will give you a Empty file upload result error
				//it you set this without the if(IS_AJAX)...else... you get ERROR:TRUE (my experience anyway)
				// so that this will still work if javascript is not enabled
			} else {
				$file_data['upload_data'] = $this->upload->data();
				$this->load->view('admin/upload_success', $file_data);
			}
		}
	}

	//gets the job done but you might want to add error checking and security
	public function deleteImage($file){
		$success = unlink(FCPATH.'uploads/' .$file);
		//info to see if it is doing what it is supposed to
		$info->sucess =$success;
		$info->path =base_url().'uploads/' .$file;
		$info->file =is_file(FCPATH.'uploads/' .$file);

		if (IS_AJAX) {
			//I don't think it matters if this is set but good for error checking in the console/firebug
			echo json_encode( array($info) );
		} else {
			//here you will need to decide what you want to show for a successful delete
			$file_data['delete_data'] = $file;
			$this->load->view('admin/delete_success', $file_data);
		}
	}

}


/* End of file home.php */
/* Location: ./application/controllers/home.php */
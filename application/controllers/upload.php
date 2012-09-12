<?php

class Upload extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
	}

	function index()
	{
		if($this->ion_auth->logged_in())
		{
			$this->load->view('upload_form', array('error' => ' ' ));
		}
		else
		{
			redirect('/auth/login');
		}
	}

	function do_upload()
	{
		$config['upload_path'] = './img/furniture';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '100';
		$config['max_width']  = '600';
		$config['max_height']  = '600';

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload())
		{
			$error = array('error' => $this->upload->display_errors());

			$this->load->view('upload_form', $error);
		}
		else
		{
			$data = array('upload_data' => $this->upload->data(),'post_data' => $this->input->post());
			//$data = array('post_data' => $this->input->post());
			$updata = $this->upload->data();
			$file_name = $updata['file_name'];

			$this->load->library('rb');
			$furniture = R::dispense('furniture');
			$furniture->title = $this->input->post('title');
			$furniture->primaryImage = "/img/furniture/".$file_name;
			R::store($furniture);

			$this->load->view('upload_success', $data);
		}
	}
}
?>
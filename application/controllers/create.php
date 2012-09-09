<?php

class Create extends CI_Controller {

	protected $section = 'create';

	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
	}

	public function index()
	{
		$this->view('create_form', array('error' => ' '));
		//$this->load->view('upload_form', array('error' => ' ' ));
	}
	
	public function view($page = 'create_form')
	{

		if (!file_exists('application/views/'.$this->section.'/'.$page.'.php'))
		{
			//Page does not exist
			show_404();
		}

		$data['section'] = $this->section;
		$data['title'] = ucfirst($page); //Get title, capitallize the first letter
		if (strcasecmp($data['title'], 'index') == 0)
		{
			$data['title'] = ucfirst($this->section);
		}
		$this->load->view('templates/header', $data);
		$this->load->view($this->section.'/'.$page, $data);
		$this->load->view('templates/footer', $data);

	}

	function do_upload()
	{
		$config['upload_path'] = '/img/furniture/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '100';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload())
		{
			$error = array('error' => $this->upload->display_errors());

			$this->view('create_form', $error);
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());

			$this->view('create_success', $data);
		}
	}
}
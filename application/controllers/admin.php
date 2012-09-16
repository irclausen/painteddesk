<?php

class Admin extends CI_Controller {

	protected $section = 'admin';
	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
	}

	public function index()
	{
		if($this->ion_auth->logged_in())
		{
			
			$this->view('index');
			
		}
		else
		{
			redirect('/auth/login');
		}
	}
	
	public function view($page = 'admin')
	{

		if (!file_exists('application/views/'.$this->section.'/'.$page.'.php'))
		{
			//Page does not exist
			show_404();
		}
		$this->load->library('rb');
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

	function do_update()
	{
		if ( ! $this->admin->do_update())
		{
			$error = array('error' => $this->upload->display_errors());

			$this->load->view('templates/header');
			$this->load->view('upload_form', $error);
			$this->load->view('templates/footer');
		}
		else
		{
			$data = array('update_data' => $this->admin->data(),'post_data' => $this->input->post());
			$updata = $this->upload->data();
			$id = $updata['id'];
			$isForSale = $updata['isForSale'];

			$this->load->library('rb');
			R::addDatabase('tpd','mysql:host=localhost;
        dbname=tpd','tpd_user','pass@word1');
			R::selectDatabase('tpd');
			$item = R::load('furniture', $id);
			$item->isForSale = $isForSale;
			R::store($item);
		}
	}
}
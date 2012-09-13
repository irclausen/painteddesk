<?php

class Shop extends CI_Controller {

	protected $section = 'shop';

	public function index()
	{
		$this->view('index');
	}
	
	public function view($page = 'shop')
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
}
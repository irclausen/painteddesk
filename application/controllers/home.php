<?php

class Home extends CI_Controller {

	protected $section = 'home';

	public function index()
	{
		$this->view('index');
	}

	public function view($page = 'index')
	{
		if ( ! file_exists('application/views/'.$this->section.'/'.$page.'.php'))
		{
			// Whoops, we don't have a page for that!
			show_404();
		}
		
		$this->load->library('rb');
		$data['title'] = ucfirst($page); // Capitalize the first letter
		
		$this->load->view('templates/header', $data);
		$this->load->view($this->section.'/'.$page, $data);
		$this->load->view('templates/footer', $data);
	}
}
<?php

class Setup extends CI_Controller {

	protected $section = 'setup';

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
	    R::setup();
	    R::nuke();

	    $furniture = R::dispense('furniture');
	    $furniture->title = 'Blue Chair';
	    $furniture->primaryImage = '/img/furniture/blueChair.jpg';
	    R::store($furniture);

	    $furniture = R::dispense('furniture');
	    $furniture->title = 'Blue Octogon Table';
	    $furniture->primaryImage = '/img/furniture/blueOctogonTable.jpg';
	    R::store($furniture);

	    $furniture = R::dispense('furniture');
	    $furniture->title = 'Blue Wide Dresser';
	    $furniture->primaryImage = '/img/furniture/blueWideDresser.jpg';
	    R::store($furniture);

	    $furniture = R::dispense('furniture');
	    $furniture->title = 'Coco Serpentine Dresser';
	    $furniture->primaryImage = '/img/furniture/cocoSerpDresser.jpg';
	    R::store($furniture);

	    $furniture = R::dispense('furniture');
	    $furniture->title = 'Creamy White Nightstand';
	    $furniture->primaryImage = '/img/furniture/creamyWhiteNightstand.jpg';
	    R::store($furniture);

	    $furniture = R::dispense('furniture');
	    $furniture->title = 'Decorative Mirror';
	    $furniture->primaryImage = '/img/furniture/decorativeMirror.jpg';
	    R::store($furniture);
		
		$data['title'] = ucfirst($page); // Capitalize the first letter
		
		$this->load->view('templates/header', $data);
		$this->load->view($this->section.'/'.$page, $data);
		$this->load->view('templates/footer', $data);
	}

}
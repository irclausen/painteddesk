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
	    R::setup('mysql:host=localhost;
        dbname=tpd','tpd_user','pass@word1');
        R::addDatabase('tpd','mysql:host=localhost;
        dbname=tpd','tpd_user','pass@word1');
		R::selectDatabase('tpd');
	    R::nuke();

	    $furniture = R::dispense('furniture');
	    $furniture->title = 'Blue Chair';
	    $furniture->primaryImage = '/img/furniture/blueChair.jpg';
	    $furniture->isForSale = false;
	    $furniture->color = 'Louie Blue and Paris Grey';
	    R::store($furniture);

	    /*$furniture = R::dispense('furniture');
	    $furniture->title = 'Blue Inlay Coffee Table';
	    $furniture->primaryImage = '/img/furniture/blueInlayCoffeeTable.jpg';
	    $furniture->isForSale = false;
	    $furniture->color = 'Custom Blend';
	    R::store($furniture);*/

	    $furniture = R::dispense('furniture');
	    $furniture->title = 'Blue Nightstand';
	    $furniture->primaryImage = '/img/furniture/blueNightstand.jpg';
	    $furniture->isForSale = false;
	    $furniture->color = 'Napoleanite';
	    R::store($furniture);

	    $furniture = R::dispense('furniture');
	    $furniture->title = 'Blue Octogon Table';
	    $furniture->primaryImage = '/img/furniture/blueOctogonTable.jpg';
	    $furniture->isForSale = false;
	    $furniture->color = 'Louie Blue and Paris Grey';
	    R::store($furniture);

	    $furniture = R::dispense('furniture');
	    $furniture->title = 'Blue Wide Dresser';
	    $furniture->primaryImage = '/img/furniture/blueWideDresser.jpg';
	    $furniture->isForSale = false;
	    $furniture->color = 'Custom Blend';
	    R::store($furniture);

	    $furniture = R::dispense('furniture');
	    $furniture->title = 'Coco Serpentine Dresser';
	    $furniture->primaryImage = '/img/furniture/cocoSerpDresser.jpg';
	    $furniture->isForSale = true;
	    $furniture->color = 'Coco';
	    R::store($furniture);

	    $furniture = R::dispense('furniture');
	    $furniture->title = 'Creamy White Nightstand';
	    $furniture->primaryImage = '/img/furniture/creamyWhiteNightstand.jpg';
	    $furniture->isForSale = false;
	    $furniture->color = 'Country Grey';
	    R::store($furniture);

	    $furniture = R::dispense('furniture');
	    $furniture->title = 'Decorative Mirror';
	    $furniture->primaryImage = '/img/furniture/decorativeMirror.jpg';
	    $furniture->isForSale = false;
	    $furniture->color = 'Custom Blend';
	    R::store($furniture);

	    $furniture = R::dispense('furniture');
	    $furniture->title = 'Elegant Blue Dresser';
	    $furniture->primaryImage = '/img/furniture/elegantBlueDresser.jpg';
	    $furniture->isForSale = false;
	    $furniture->color = 'Custom Blend';
	    R::store($furniture);

	    $furniture = R::dispense('furniture');
	    $furniture->title = 'Antique Dresser';
	    $furniture->primaryImage = '/img/furniture/FLAntiqueDresser.jpg';
	    $furniture->isForSale = false;
	    $furniture->color = 'French Linen';
	    R::store($furniture);

	    $furniture = R::dispense('furniture');
	    $furniture->title = 'Glass Knob Dresser';
	    $furniture->primaryImage = '/img/furniture/glassKnobDresser.jpg';
	    $furniture->isForSale = false;
	    $furniture->color = 'Custom Blend';
	    R::store($furniture);

	    $furniture = R::dispense('furniture');
	    $furniture->title = 'Small Table';
	    $furniture->primaryImage = '/img/furniture/smallAngieTable.jpg';
	    $furniture->isForSale = false;
	    $furniture->color = 'Custom Blend';
	    R::store($furniture);

	    $furniture = R::dispense('furniture');
	    $furniture->title = 'Dresser';
	    $furniture->primaryImage = '/img/furniture/angieDresser.jpg';
	    $furniture->isForSale = false;
	    $furniture->color = 'Custom Blend';
	    R::store($furniture);

	    $furniture = R::dispense('furniture');
	    $furniture->title = 'Aubusson Desk';
	    $furniture->primaryImage = '/img/furniture/aubussonDesk.jpg';
	    $furniture->isForSale = true;
	    $furniture->color = 'Aubusson Blue';
	    R::store($furniture);
	    
	    $furniture = R::dispense('furniture');
	    $furniture->title = 'Aubusson Nightstand';
	    $furniture->primaryImage = '/img/furniture/aubussonNightstand.jpg';
	    $furniture->isForSale = false;
	    $furniture->color = 'Aubusson Blue';
	    R::store($furniture);

	    $furniture = R::dispense('furniture');
	    $furniture->title = 'Blue Changing Table';
	    $furniture->primaryImage = '/img/furniture/blueChangingTable.jpg';
	    $furniture->isForSale = false;
	    $furniture->color = 'Blue';
	    R::store($furniture);

	    $furniture = R::dispense('furniture');
	    $furniture->title = 'Drop Leaf Table';
	    $furniture->primaryImage = '/img/furniture/dropLeafTable.jpg';
	    $furniture->isForSale = false;
	    $furniture->color = 'Blue';
	    R::store($furniture);

	    $furniture = R::dispense('furniture');
	    $furniture->title = 'Drum Table Provence';
	    $furniture->primaryImage = '/img/furniture/drumTableProvence.jpg';
	    $furniture->isForSale = false;
	    $furniture->color = 'Provence';
	    R::store($furniture);

	    $furniture = R::dispense('furniture');
	    $furniture->title = 'Empire Dresser';
	    $furniture->primaryImage = '/img/furniture/empireDresser.jpg';
	    $furniture->isForSale = false;
	    $furniture->color = 'Custom';
	    R::store($furniture);	
		
		$data['title'] = ucfirst($page); // Capitalize the first letter
		
		$this->load->view('templates/header', $data);
		$this->load->view($this->section.'/'.$page, $data);
		$this->load->view('templates/footer', $data);
	}

}
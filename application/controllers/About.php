<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class About extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('About_model');
	}

	public function index()
	{
		$about = $this->About_model->get_list();
		$this->data['about'] = $about; 
		$this->data['temp'] = 'site/about/index';
		$this->load->view('site/layout', $this->data);
	}

}

/* End of file News.php */
/* Location: ./application/controllers/News.php */
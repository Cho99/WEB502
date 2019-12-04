<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class News extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('New_model');
	}

	public function index()
	{
		$news = $this->New_model->get_list();
		$this->data['news'] = $news; 
		$this->data['temp'] = 'site/news/index';
		$this->load->view('site/layout', $this->data);
	}

	public function view() {
		$id = $this->uri->rsegment(3);
		$id = intval($id);
		$new = $this->New_model->get_info($id);
		$this->data['new'] = $new;
		$this->data['temp'] = 'site/news/view';
		$this->load->view('site/layout', $this->data);	
	}

}

/* End of file News.php */
/* Location: ./application/controllers/News.php */
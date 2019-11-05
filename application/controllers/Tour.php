<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tour extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Tour_model');
	}

	public function index()
	{
		
	}
	public function view()
	{
		$id = $this->uri->segment(3);
		$tour = $this->Tour_model->get_info($id);
		if (!$tour) {
			redirect();
		}
		$this->data['tour'] = $tour;
		$data = array();
		$data['view'] = $tour->view + 1; 
		$this->Tour_model->update($tour->id, $data);
		$this->data['temp'] = 'site/tour/index';
		$this->load->view('site/layout', $this->data);
	}

}

/* End of file Tour.php */
/* Location: ./application/controllers/Tour.php */
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
	public function mien() {
		$id = $this->uri->segment(3);
		$input['where']['catalog_id'] = $id;
		$tour = $this->Tour_model->get_list($input);
		$this->data['tour'] = $tour;

		$input['limit'] = array('3', '0');
		$tour_new = $this->Tour_model->get_list($input);

		$this->data['tour_new'] = $tour_new;
		
		$this->data['id'] = $id;
		$this->data['temp'] = 'site/tour/mien';
		$this->load->view('site/layout', $this->data);	
	}

}

/* End of file Tour.php */
/* Location: ./application/controllers/Tour.php */
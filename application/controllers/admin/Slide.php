<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Slide extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Slide_model');
	}

	public function index()
	{
		$total_rows = $this->Slide_model->get_total();
		$this->data['total_rows'] = $total_rows;

		$input = array();
		$id = $this->input->get('id');
		$id = intval($id);
		if ($id) {
			$input['where']['id'] = $id;
		}
		$list = $this->Slide_model->get_list($input);
		$this->data['list'] = $list;


		$this->data['temp'] = 'admin/noidung/slide';
		$this->load->view('admin/main', $this->data);
	}

}

/* End of file Slide.php */
/* Location: ./application/controllers/Slide.php */
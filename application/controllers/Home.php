<?php 
Class Home extends MY_Controller
{
	function index() {
		$this->load->model('Tour_model');
		$input = array();
		$tour = $this->Tour_model->get_list();
		$this->data['tour'] = $tour;
		$this->data['temp'] = 'site/home/index';
		$this->load->view('site/layout', $this->data);
	}
}
 ?>
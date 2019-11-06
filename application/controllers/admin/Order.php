<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Order extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Tour_model');
		$this->load->model('Order_model');
	}

	public function index()
	{
		
		
	}
	public function view() {
		$id = $this->uri->rsegment(3);
		$input['where'] = array();
		$input['where'] = array('id_giaodich' => $id);
		$list = $this->Order_model->get_list($input);
		$this->data['list'] = $list;

		$tour = $this->Tour_model->get_list();
		$this->data['tour'] = $tour;

		$this->data['temp'] = 'admin/order/index';
		$this->load->view('admin/main', $this->data);	
	}

}

/* End of file Order.php */
/* Location: ./application/controllers/Order.php */
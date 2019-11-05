<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class GiaoDich extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('GiaoDich_model');
		$this->load->model('Order_model');
		$this->load->model('Tour_model');
	}

	public function index()
	{
		//B1: Lấy tổng số lượng các Giao dịch ở trong CSDL
		$total_rows = $this->GiaoDich_model->get_total();
		$this->data['total_rows'] = $total_rows;
        
        $id = $this->input->get('id');
        $id = intval($id);
		$input['where'] = array();
		if ($id > 0) {
			$input['where']['id'] = $id;
		}
        //B2: Lấy danh sách giao dịch
        $list_giaodich = $this->GiaoDich_model->get_list($input);
        $this->data['list'] = $list_giaodich;

        $list_order = $this->Order_model->get_list($input);
        $this->data['order'] = $list_order;

        $message = $this->session->flashdata('message');
        $this->data['message'] = $message;

        $this->data['temp'] = 'admin/giaodich/index';
		$this->load->view('admin/main', $this->data);
	}

	public function del() {
		$id = $this->uri->rsegment(3);
		$input['id_giaodich'] = $id;
		if ($this->GiaoDich_model->delete($id) && $this->Order_model->del_rule($input)) {
			$this->session->set_flashdata('massage', 'Xóa thành giao dịch này ');
			redirect(admin_url('giaodich'));    		
		}
	}

}

/* End of file GiaoDich.php */
/* Location: ./application/controllers/GiaoDich.php */
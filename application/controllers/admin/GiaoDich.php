<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class GiaoDich extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('GiaoDich_model');
		$this->load->model('Order_model');
		$this->load->model('Tour_model');
		$this->load->library('pagination');
	}

	public function index()
	{
		//B1: Lấy tổng số lượng các Giao dịch ở trong CSDL
		$total_rows = $this->GiaoDich_model->get_total();
		$this->data['total_rows'] = $total_rows;
        
        // Phân trang
		$config = array();
        $config['total_rows'] = $total_rows;//tong tat ca cac san pham tren website
        $config['base_url']   = admin_url('giaodich/index'); //link hien thi ra danh sach san pham
        $config['per_page']   = 5;//so luong san pham hien thi tren 1 trang
        $config['uri_segment'] = 4;//phan doan hien thi ra so trang tren url
        $config['next_link']   = 'Trang kế tiếp';
        $config['prev_link']   = 'Trang trước';
        //khoi tao cac cau hinh phan trang
        $this->pagination->initialize($config);
        
        $segment = $this->uri->segment(4);
        $segment = intval($segment);
        
        $input = array();
        $input['limit'] = array($config['per_page'], $segment);
        
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
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('New_model');
		$this->load->helper('form');	
		$this->load->library('form_validation');
	}

	public function index()
	{
        //Phương thức lấy toàn bộ dữ liệu trong bảng
		$news = $this->New_model->get_list();
		$this->data['news'] = $news;

		$this->data['temp'] = 'admin/new/index';
		$this->load->view('admin/main', $this->data);
		
	}

	public function add() {
		//B1: Kiểm tra xem dữ liệu có được POST lên không 
		if ($this->input->post()) {
			//B2: Xét Form_validation
			$this->form_validation->set_rules('ten', 'Tên thư mục', 'required');
			$this->form_validation->set_rules('mota', 'Tên thư mục', 'required');
			$this->form_validation->set_rules('noidung', 'Tên thư mục', 'required');
			//B3: Kiểm form_validation chạy
			if ($this->form_validation->run()) {
				//B4: Đưa các biến vào một biến array
				$data = array(
					'ten'     => $this->input->post('ten'),
					'mota'    => $this->input->post('mota'),
					'noidung' => $this->input->post('noidung'),
					'created' => now() 
				);
				//B5: Thực hiện thêm mới dữ liệu vào bảng
				if ($this->New_model->create($data)) {
				$this->session->set_flashdata('message', 'Thêm mới Tin tức thành công');
				}else {
					$this->session->set_flashdata('message', 'Thêm mới Tin tức thất bại');
				}
				redirect(admin_url('news'));
			}
		}
        $catalog = $this->Catalog_model->get_list();
		$this->data['catalog'] = $catalog;

		$this->data['temp'] = 'admin/new/add';
		$this->load->view('admin/main', $this->data);
	}

	public function edit() {
		$id = $this->uri->rsegment('3');
		$info = $this->News_model->get_info($id);
		if (!$info) {
			 $this->session->set_flashdata('message', 'Dữ liệu không tồn tại');
			 redirect(admin_url('news'));
		}
		$this->data['info'] = $info;
		if ($this->input->post()) {
			$this->form_validation->set_rules('ten', 'Tên thư mục', 'required');
			$this->form_validation->set_rules('mota', 'Tên thư mục', 'required');
			$this->form_validation->set_rules('noidung', 'Tên thư mục', 'required');
			if ($this->form_validation->run()) {
				$data = array(
					'ten'     => $this->input->post('ten'),
					'mota'    => $this->input->post('mota'),
					'noidung' => $this->input->post('noidung') 
				);
				if ($this->News_model->update($id,$data)) {
				    $this->session->set_flashdata('message', 'Cập nhật Tin tức thành công');
				}else {
				    $this->session->set_flashdata('message', 'Cập nhật không thành công');
				}	
				redirect(admin_url('news'));
			}
	}

	public function delete() {
		$id = $this->uri->rsegment(3);
		$this->_del($id);
		$this->session->set_flashdata('message', 'Xóa thành công');
       redirect(admin_url('news'));
	}
	public function delete_all() {
		$ids = $this->input->post('ids');
		foreach ($ids as $id) {
			$this->_del($id);
		}
	}
	public function _del($id, $redirect = true) {
		$info = $this->News_model->get_info($id);
		if (!$info) {
			$this->session->set_flashdata('message', 'Không tồn tại danh mục này');
       	    redirect(admin_url('news'));
		}
		$this->load->model('Tour_model');
		$tour = $this->News_model->get_info_rule(array('news_id' => $id), 'id');
		if ($tour) {
			$this->session->set_flashdata('message', 'Danh mục '.$info->name.' có chứa các Tour du lịch, bạn cần xóa các tour trước khi xóa danh mục Tour');
			if ($redirect) {
				redirect(admin_url('news'));
			}else {
				return false;
			}
		}
		$this->News_model->delete($id);
	}
}

/* End of file New.php */
/* Location: ./application/controllers/admin/New.php */
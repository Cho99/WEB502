<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Catalog extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Catalog_model');
		$this->load->helper('form');	
		$this->load->library('form_validation');
	}

	public function index()
	{
		$list = $this->Catalog_model->get_list();
		$this->data['list'] = $list;

		$message = $this->session->flashdata('message');
        $this->data['message']=$message;

		$this->data['temp'] = 'admin/catalog/index';
		$this->load->view('admin/main', $this->data);
	}

	public function add() {
		if ($this->input->post()) {
			$this->form_validation->set_rules('name', 'Tên thư mục', 'required');
			if ($this->form_validation->run()) {
				$name = $this->input->post('name');
				$parent_id = $this->input->post('parent_id');
				$sort_order = $this->input->post('sort_order');

				$data = array(
					'name' => $name,
					'parent_id' => $parent_id,
					'sort_order' => $sort_order
				);
				if ($this->Catalog_model->create($data)) {
					$this->session->set_flashdata('message', 'Thêm mới Thư mục thành công');
				}else {
					$this->session->set_flashdata('message', 'Thêm mới Thư mục thất bại');
				}
				redirect(admin_url('catalog'));
			}
		}
		$input = array();
		$input['where'] = array('parent_id' => 0);
		$list = $this->Catalog_model->get_list($input);
		$this->data['list'] = $list;
		$this->data['temp'] = 'admin/catalog/add';
		$this->load->view('admin/main', $this->data);
	}

	public function edit() {
		$id = $this->uri->rsegment('3');
		$info = $this->Catalog_model->get_info($id);
		if (!$info) {
			 $this->session->set_flashdata('message', 'Dữ liệu không tồn tại');
			 redirect(admin_url('catalog'));
		}
		$this->data['info'] = $info;
		if ($this->input->post()) {
			$this->form_validation->set_rules('name', 'Tên', 'required');
			if ($this->form_validation->run()) {
				$name = $this->input->post('name');
				$parent_id = $this->input->post('parent_id');
				$sort_order = $this->input->post('sort_order');
				$data = array(
					'name' => $name,
					'parent_id' => $parent_id,
					'sort_order' => $sort_order
				);
				if ($this->Catalog_model->update($id,$data)) {
				    $this->session->set_flashdata('message', 'Thêm mới dữ liệu thành công');
				}else {
				    $this->session->set_flashdata('message', 'Thêm mới dữ liệu không thành công');
				}	
				redirect(admin_url('catalog'));
			}
		}
		$input = array();
		$input['where'] = array('parent_id' => 0);
		$list = $this->Catalog_model->get_list($input);
		$this->data['list'] = $list;
		$this->data['temp'] = 'admin/catalog/edit';
		$this->load->view('admin/main', $this->data);
	}

	public function delete() {
		$id = $this->uri->rsegment(3);
		$this->_del($id);

		// $this->Catalog_model->delete($id);
		 $this->session->set_flashdata('message', 'Xóa thành công');
       redirect(admin_url('catalog'));
	}
	public function delete_all() {
		$ids = $this->input->post('ids');
		foreach ($ids as $id) {
			$this->_del($id);
		}
	}
	public function _del($id, $redirect = true) {
		$info = $this->Catalog_model->get_info($id);
		if (!$info) {
			$this->session->set_flashdata('message', 'Không tồn tại danh mục này');
       	    redirect(admin_url('catalog'));
		}
		$this->load->model('Tour_model');
		$tour = $this->Tour_model->get_info_rule(array('catalog_id' => $id), 'id');
		if ($tour) {
			$this->session->set_flashdata('message', 'Danh mục '.$info->name.' có chứa các Tour du lịch, bạn cần xóa các tour trước khi xóa danh mục Tour');
			if ($redirect) {
				redirect(admin_url('catalog'));
			}else {
				return false;
			}
		}
		$this->Catalog_model->delete($id);
	}

}

/* End of file Catalog.php */
/* Location: ./application/controllers/Catalog.php */
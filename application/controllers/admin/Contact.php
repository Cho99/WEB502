<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Contact_model');
		$this->load->library('form_validation');
	}

	public function index()
	{
        // Lấy tổng số bản ghi có trong CSDL có nghĩa là lấy tổng số lượng
		$sub_total = $this->Contact_model->get_total();
		$this->data['sub_total'] = $sub_total;

        // Lấy ra toàn bộ dữ liệu trong bảng liên hệ
		$list = $this->Contact_model->get_list();
		$this->data['list'] = $list;

		$this->data['temp'] = 'admin/contact/index';
		$this->load->view('admin/main', $this->data);
	}

	public function add() {
		//B1: Kiểm tra xem có dữ liệu post lên không
		if ($this->input->post()) {
			// B2: Kiểm tra với Form_validation
			$this->form_validation->set_rules('ten', 'Tên', 'required');
			$this->form_validation->set_rules('email', 'Email', 'required');
			$this->form_validation->set_rules('diachi', 'Địa Chỉ', 'required');
			if ($this->form_validation->run()) {
				//B3: Form_validation chạy thì thêm dữ liệu vào biến $data 
				$ten = $this->input->post('ten');
				$sdt = $this->input->post('sdt');
				$fax = $this->input->post('fax');
				$email = $this->input->post('email');
				$diachi = $this->input->post('diachi');

				$data = array(
					'ten' => $ten,
					'sdt' => $sdt,
					'fax' => $fax,
					'email' => $email,
					'diachi' => $diachi,
					'created' => now(),
				);
				//B4: Thêm dữ liệu vào CSDL
				if ($this->Contact_model->create($data)) {
					$this->session->set_flashdata('message', 'Thêm mới liên hệ thành công');
				}else {
					$this->session->set_flashdata('message', 'Thêm mới liên hệ không thành công');
				}	
				redirect(admin_url('contact'));

			}
		}
		$this->data['temp'] = 'admin/contact/add';
		$this->load->view('admin/main', $this->data);
		
	}

	public function edit() {
		$id = $this->uri->rsegment(3);
		$info = $this->Contact_model->get_info($id);
		if (!$info) {
			$this->session->set_flashdata('message', 'Không tồn tại Liên hệ này');
			redirect(admin_url('contact'));
		}
		$this->data['info'] = $info;
		if ($this->input->post()) {
			// B2: Kiểm tra với Form_validation
			$this->form_validation->set_rules('ten', 'Tên', 'required');
			$this->form_validation->set_rules('email', 'Email', 'required');
			$this->form_validation->set_rules('diachi', 'Địa Chỉ', 'required');
			if ($this->form_validation->run()) {
				//B3: Form_validation chạy thì thêm dữ liệu vào biến $data 
				$ten = $this->input->post('ten');
				$sdt = $this->input->post('sdt');
				$fax = $this->input->post('fax');
				$email = $this->input->post('email');
				$diachi = $this->input->post('diachi');

				$data = array(
					'ten' => $ten,
					'sdt' => $sdt,
					'fax' => $fax,
					'email' => $email,
					'diachi' => $diachi,
				);
				//B4: Thêm dữ liệu vào CSDL
				if ($this->Contact_model->update($id,$data)) {
					$this->session->set_flashdata('message', 'Cập nhật liên hệ thành công');
				}else {
					$this->session->set_flashdata('message', 'Cập nhật liên hệ không thành công');
				}
				redirect(admin_url('contact'));	
			}
		}
		$this->data['temp'] = 'admin/contact/edit';
		$this->load->view('admin/main', $this->data);
	}
	public function delete(){
       $id = $this->uri->rsegment(3);
       $this->_del($id);
      
       $this->Contact_model->delete($id);
       // tạo nội dung thông báo
       $this->session->set_flashdata('message', 'Xóa thành công');
       redirect(admin_url('contact'));
	}
	// xóa nhiều danh mục sản phẩm
	public function delete_all(){
        $ids = $this->input->post('ids');
        foreach ($ids as $id) {
         	$this->_del($id);
         } 
	}
	// thực hiện xóa
	public function _del($id, $redirect = true){
       $info =$this->Contact_model->get_info($id);
       if (!$info) {
       	 $this->session->set_flashdata('message', 'Không tồn tại danh mục này');
       	 redirect(admin_url('contact'));
       }
        // xóa dữ liệu
        $this->Contact_model->delete($id);
	}

}

/* End of file Contact.php */
/* Location: ./application/controllers/Contact.php */
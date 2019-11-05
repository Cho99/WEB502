<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Admin_model');
		$this->load->helper('form');	
		$this->load->library('form_validation');
	}

	public function index()
	{
		$input = array();
		$list = $this->Admin_model->get_list($input);
		$this->data['list'] = $list;
		
		$total = $this->Admin_model->get_total($list);
		$this->data['total'] = $total;

		$message = $this->session->flashdata('message');
		$this->data['message'] = $message;
	
		$this->data['temp'] = 'admin/admin/index';
		$this->load->view('admin/main', $this->data);
	}

	public function check_username() {
		$username = $this->input->post('username');
		$where = array('username'=>$username);
		if ($this->Admin_model->check_exists($where)) {
			$this->form_validation->set_message(__FUNCTION__,'Tài khoản tồn tại');
			return false;
		}
		return true;
	}

	public function add() {
		if ($this->input->post()) {
			$this->form_validation->set_rules('name', 'Tên', 'required');
			$this->form_validation->set_rules('username', 'Tài khoản', 'trim|required|callback_check_username');
			$this->form_validation->set_rules('password', 'Mật khẩu', 'trim|required|min_length[6]');
			$this->form_validation->set_rules('re_password', 'Nhập lại mật khẩu', 'matches[password]');
			if ($this->form_validation->run()) {
				$name = $this->input->post('name');
				$username = $this->input->post('username');
				$password = $this->input->post('password');
				$data = array(
					'hoten' => $name,
					'username' => $username,
					'password' => $password,
				);
				if ($this->Admin_model->create($data)) {
					$this->session->set_flashdata('message','Thêm mới tài khoản thành công');
				}else {
					$this->session->set_flashdata('message','Thêm mới tài khoản thất bại');
				}
				redirect(admin_url('admin'));
			}
		}
		$this->data['temp'] = 'admin/admin/add';
		$this->load->view('admin/main', $this->data);
	}

	public function edit(){
		$id = $this->uri->rsegment('3');
		$id = intval($id);

		// Lấy thông tin của tài khoản
		$info = $this->Admin_model->get_info($id);
		if (!$info) {
			$this->session->set_flashdata('message','Khong ton tai quan tri vien');
			redirect(admin_url('admin'));
		}
		$this->data['info'] = $info;
		if ($this->input->post()) {
			$this->form_validation->set_rules('name','Tên','required');
			$username = $this->input->post('username');
			if ($username <> $info->username) {
				$this->form_validation->set_rules('username', 'Tài khoản đăng nhập', 'required|callback_check_username');
			}else {
				$this->form_validation->set_rules('username', 'Tài khoản đăng nhập', 'required');
			}
			$password = $this->input->post('password');
			if ($password) {
				$this->form_validation->set_rules('password', 'Mật khẩu', 'required|min_length[6]');
				$this->form_validation->set_rules('re_passowrd', 'Nhập lại mật khẩu', 'matches[password]');
			}
			if ($this->form_validation->run()) {
				$name = $this->input->post('name');
				$data = array('hoten' => $name);

				if ($usename) {
					$data['username'] = $username;
				}
				if ($password) {
					$data['password'] = $password;
				}
				if($this->Admin_model->update($id, $data)) {
					$this->session->set_flashdata('message', 'Cập nhật thông tin thành công');
				}else {
				    $this->session->set_flashdata('message', 'Không cập nhật được');
				}	
				redirect(admin_url('admin'));	
			}
		}
		$this->data['temp'] = 'admin/admin/edit';
		$this->load->view('admin/main', $this->data);
	}

	public function delete() {
		$id = $this->uri->rsegment('3');
		$id = intval($id);
		$info = $this->Admin_model->get_info($id);
		if (!$info) {
			$this->session->set_flashdata('message', 'Không tồn tại quản trị viên');
			redirect(admin_url('admin'));
		}
		$this->Admin_model->delete($id);
		$this->session->set_flashdata('message', 'Xóa thành công');
		redirect(admin_url('admin'));
	}

	public function logout() {
		if ($this->session->userdata('login')) {
			$this->session->unset_userdata('login');
		}
		redirect(admin_url('login'));
	}
}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */
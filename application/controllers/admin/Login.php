<?php 
class Login extends MY_Controller {

	public function index()
	{
		if($this->input->post())
		{
			$this->form_validation->set_rules('login', 'login', 'callback_check_login');
			if($this->form_validation->run())
            {
            	$this->session->set_userdata('login',true);
                admin_url('admin');
            }
		}
		$this->load->view('admin/login/index');
	}

    // Kiem tra	username voi password co chinh xac khong 
	function check_login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$this->load->model('Admin_model');
		$where = array('username' => $username, 'password' => $password);
		if ($this->Admin_model->check_exists($where)) {
			return true;
		}
		$this->form_validation->set_message(__FUNCTION__, 'Không đăng nhập thành công');
		return false;
	}

}


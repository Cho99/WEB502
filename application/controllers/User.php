<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_model');
		$this->load->library('form_validation');
        $this->load->helper('form');
	}

	public function index()
	{
		if (!$this->session->userdata('user_id_login')) {
			redirect();
		}
		$user_id = $this->session->userdata('user_id_login');
		$user = $this->User_model->get_info($user_id);
		if (!$user) {
			redirect();
		}
		$this->data['user'] = $user;
	    $this->data['temp'] = 'site/user/index';
        $this->load->view('site/layout', $this->data);
	}

	public function edit() {
		if(!$this->session->userdata('user_id_login'))
        {
            redirect(site_url('user/login'));
        }
        $user_id = $this->session->userdata('user_id_login');
        $user = $this->User_model->get_info($user_id);
         if(!$user)
        {
            redirect();
        }
        $this->data['user']  = $user;
        if($this->input->post())
        {
            $password = $this->input->post('password');
            
            $this->form_validation->set_rules('ten', 'Tên', 'required');
            if($password)
            {
                $this->form_validation->set_rules('password', 'Mật khẩu', 'required|min_length[6]');
                $this->form_validation->set_rules('re_password', 'Nhập lại mật khẩu', 'matches[password]');
            }
         
        
            //nhập liệu chính xác
            if($this->form_validation->run())
            {
                //them vao csdl
                $data = array(
                    'ten' => $this->input->post('ten'),
					'sdt' => $this->input->post('sdt'),
					'diachi' => $this->input->post('diachi'),
                );
                if($this->User_model->update($user_id, $data))
                {
                    //tạo ra nội dung thông báo
                    $this->session->set_flashdata('message', 'Chỉnh sửa thông tin thành công thành công');
                }else{
                    $this->session->set_flashdata('message', 'Không thành công');
                }
                //chuyen tới trang danh sách quản trị viên
                redirect(base_url('user'));
            }
        }
        //hiển thị ra view
        $this->data['temp'] = 'site/user/edit';
        $this->load->view('site/layout', $this->data);
	}

	public function login() {
		if($this->session->userdata('user_id_login'))
        {
            redirect(site_url('user'));
        }
		if ($this->input->post()) {
			$this->form_validation->set_rules('login' ,'login', 'callback_check_login');
			if ($this->form_validation->run()) {
				$user = $this->_get_user_info();
				$this->session->set_userdata('user_id_login', $user->id);       
                redirect();
			}
		}
        $this->load->view('site/user/login');
	}
	public function check_login() {
		$user = $this->_get_user_info();
		if ($user) {
			return true;
		}
		$this->form_validation->set_message(__FUNCTION__, 'Không đăng nhập thành công');
        return false;
	}
	public function _get_user_info() {
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$where = array('email' => $email, 'password' => $password);
		$user = $this->User_model->get_info_rule($where);
		return $user;
	}

	function check_email()
    {
        $email = $this->input->post('email');
        $where = array('email' => $email);
        //kiêm tra xem email đã tồn tại chưa
        if($this->User_model->check_exists($where))
        {
            //trả về thông báo lỗi
            $this->form_validation->set_message(__FUNCTION__, 'Email đã tồn tại');
            return false;
        }
        return true;
    }

	public function khachhang() {
		if ($this->session->userdata('user_id_login')) {
			redirect(base_url('user'));
		}
		// Kiểm dữ liệu có post lên không
		if ($this->input->post()) {
			$this->form_validation->set_rules('ten', 'Tên', 'required|min_length[3]');
			$this->form_validation->set_rules('email', 'Email đăng nhập', 'required|valid_email|callback_check_email');
			$this->form_validation->set_rules('password', 'Mật khẩu', 'required');
			$this->form_validation->set_rules('re_password', 'Nhập lại mật khẩu', 'matches[password]');
			$this->form_validation->set_rules('sdt', 'Số điện thoại', 'required');
			$this->form_validation->set_rules('cmnd', 'Chứng thư hoặc thẻ căn cước', 'required|min_length[12]');
			$this->form_validation->set_rules('diachi', 'Địa chỉ', 'required');

			if ($this->form_validation->run()) {
            	// Thêm vào CSDL
				$data = array(
					'ten' => $this->input->post('ten'),
					'cmnd' => $this->input->post('cmnd'),
					'sdt' => $this->input->post('sdt'),
					'diachi' => $this->input->post('diachi'),
					'email' => $this->input->post('email'),
					'password' => $this->input->post('password')
				);

				if ($this->User_model->create($data)) {
            			//tạo ra nội dung thông báo
					$this->session->set_flashdata('message', 'Đăng ký thành viên thành công');
				}else{
					$this->session->set_flashdata('message', 'Không thêm được');
				}
				redirect();
			}
		}
		//hiển thị ra view
		$this->load->view('site/user/dangky', $this->data);
	}

	public function logout() {
		if ($this->session->userdata('user_id_login')) {
			$this->session->unset_userdata('user_id_login');
		}
		redirect();
	}
 
}

/* End of file User.php */
/* Location: ./application/controllers/User.php */
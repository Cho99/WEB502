<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Contact_model');
		$this->load->library('email');
	}

	public function index()
	{
		$list = $this->Contact_model->get_list();
		$this->data['list'] = $list;
		if ($this->input->post()) {

			$email    = $this->input->post('email');
			$subject  = $this->input->post('tieude');
			$ten      = $this->input->post('hoten');
			$sdt      = $this->input->post('sdt');
			$tt       = $this->input->post('tt');
			$sokhach  = $this->input->post('sokhach');	
			$diachi   = $this->input->post('diachi');
			$noidung  = $this->input->post('noidung');

			if ($tt == "1") {
				$tt = "Du lịch";
			}else {
				$tt = "Chăm sóc khách hàng";
			}

			$config['protocol'] 	= 'smtp';
			$config['smtp_host'] 	= 'ssl://smtp.googlemail.com'; //neu sử dụng gmail
			$config['smtp_user'] 	= 'tombeo2456@gmail.com';
			$config['smtp_pass'] 	= 'ovhezcjqhlgbosne';
			$config['smtp_port'] 	= '465'; //nếu sử dụng gmail
			$config['charset']  = 'utf-8';
			$config['newline']  = "\r\n";

			$this->email->initialize($config);
			$this->email->from($email, 'Khách hàng');
			$this->email->to('502_travel@gmail.com');
			$this->email->subject($subject);

			$message = $tt . "\n\n" . 'Họ và tên: ' . $ten . "\n\n" . "Số điện thoại: " . $sdt ."\n\n". "Địa chỉ: ". $diachi . "\n\n" ."Nội dung: " . "\n\n" . $noidung;

			$this->email->message($message);
			if ($this->email->send()) {
				$this->session->set_flashdata('success', 'Gửi tin thành công');
				$this->data['temp'] = 'site/contact/index';
				$this->load->view('site/layout', $this->data);
			} else {
				$this->session->set_flashdata('success', 'Gửi tin thất bại');
				$this->data['temp'] = 'site/contact/index';
				$this->load->view('site/layout', $this->data);
			}
		}
		$this->data['temp'] = 'site/contact/index';
		$this->load->view('site/layout', $this->data);
	}

}

/* End of file Contact.php */
/* Location: ./application/controllers/Contact.php */
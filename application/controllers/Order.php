<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Order extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_model');
		$this->load->model('GiaoDich_model');
		$this->load->model('Order_model');
        $this->load->model('Tour_model');
        $this->load->library('email');
	}

	public function checkout()
	{
        if (!$this->session->userdata('user_id_login')) {
            redirect('user/login');
        }
		//Lấy thông tin giỏ hàng
		$carts = $this->cart->contents();
		// Tổng số tour có trong giỏ hàng
		$total_items = $this->cart->total_items();
		if ($total_items <= 0) {
			redirect();		
		}
		//Toong so tien can thanh toan
        $total_amount = 0;

        foreach ($carts as $row)
        {
            $total_amount = $total_amount + $row['subtotal'];  
        }
        $this->data['total_amount'] = $total_amount;

		$user_id = '';
        $user = '';
		if ($this->session->userdata('user_id_login')) {
			$user_id = $this->session->userdata('user_id_login');
			$user = $this->User_model->get_info($user_id);
		}

        
		$this->data['user'] = $user;
		if ($this->input->post()) {
			$this->form_validation->set_rules('email', 'Email nhận hàng', 'required|valid_email');
            $this->form_validation->set_rules('ten', 'Tên', 'required');
            $this->form_validation->set_rules('sdt', 'Số điện thoại', 'required');
            $this->form_validation->set_rules('payment', 'Cổng thanh toán', 'required');
            if ($this->form_validation->run()) {
                // Lấy phương thước thanh toán
            	$payment = $this->input->post('payment');
                // Lấy thời gian đi được đặt
            	$data = array(
            		'id_user' => $user_id,
            		'email' => $this->input->post('email'),
            		'ten'  => $this->input->post('ten'),
            		'sdt'   => $this->input->post('sdt'),
            		'ghi_chu' => $this->input->post('ghichu'),
            		'so_tien' => $total_amount,
            		'hinhthuc_thanhtoan' => $payment,
            		'created' => now()
            	);
            	$this->GiaoDich_model->create($data);
            	$id_giaodich = $this->db->insert_id();

            	// Thêm vào bảng Order(Chi tiết Giao dịch)
            	foreach ($carts as $row) {
            		$data = array(
            			'id_giaodich' => $id_giaodich,
            			'id_tour'     => $row['id'],
            			'so_nguoi'    => $row['qty'],
                        'ngay_di'     => $row['ngay_di'],
              			'sotien'      => $row['subtotal'],
            		);
            	  $this->Order_model->create($data);
                  $input['where'] = array();
                  $input['where'] = array('id' => $row['id']); 
                  $tour_amount = $this->Tour_model->get_list($input);
                  foreach ($tour_amount as $value) {
                      $booked['booked'] = $value->booked + $row['qty'];
                      $booked['buyed'] = $value->buyed + 1;
                      $this->Tour_model->update($row['id'], $booked);
                  }   
            	}
            	$this->cart->destroy();
            	if ($payment == 'offline') {
            		$this->session->set_flashdata('message', 'Bạn đã book tour thành công, chúng tôi sẽ gửi mail cho bạn sớm nhât');
                    $this->send_email();
            		redirect('cart');
            	}
            }
		}
		$this->data['temp'] = 'site/order/checkout';
        $this->load->view('site/layout', $this->data);
	}


    function send_email() {
            $email   = $this->input->post('email');
            $ten     = $this->input->post('ten');
            $subject = "502-Travel.com.vn Thông báo";
            $sdt     = $this->input->post('sdt');
            $payment = $this->input->post('payment');
            $noidung = "Anh/Chị đã đặt tour thành công mong anh chị hãy đến đại lý của chúng tôi ở các khu vực để thanh toán sớm nhất, nếu Anh/Chị đến sau ngày đặt thì đơn đặt tour sẽ bị hủy";
            $message = 'Dear ' . $ten . "\n\n" . "Số điện thoại: " . $sdt ."\n\n" ."Nội dung: " . "\n\n" . $noidung;


            $config['protocol']     = 'smtp';
            $config['smtp_host']    = 'ssl://smtp.googlemail.com'; //neu sử dụng gmail
            $config['smtp_user']    = 'tombeo2456@gmail.com';
            $config['smtp_pass']    = 'ovhezcjqhlgbosne';
            $config['smtp_port']    = '465'; //nếu sử dụng gmail
            $config['charset']  = 'utf-8';
            $config['newline']  = "\r\n";

            $this->email->initialize($config);
            $this->email->from('admin_Dog@gmail.com', '502-Travel.com.vn');
            $this->email->to($email);
            $this->email->subject($subject);

            $this->email->message($message);
            $this->email->send();
    }

}

/* End of file Order.php */
/* Location: ./application/controllers/Order.php */
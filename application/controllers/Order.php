<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Order extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_model');
		$this->load->model('GiaoDich_model');
		$this->load->model('Order_model');
        $this->load->model('Tour_model');
	}

	public function checkout()
	{
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
            	$payment = $this->input->post('payment');
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
            			'sotien'      => $row['subtotal'],
            		);
            		$this->Order_model->create($data);
                  $input['where'] = array();
                  $input['where'] = array('id' => $row['id']); 
                  $tour_amount = $this->Tour_model->get_list($input);
                  foreach ($tour_amount as $value) {
                      $booked['booked'] = $value->booked + $row['qty'];
                      $this->Tour_model->update($row['id'], $booked);
                  }   
            	}
            	$this->cart->destroy();
            	if ($payment == 'offline') {
            		$this->session->set_flashdata('message', 'Bạn đã book tour thành công, chúng tôi sẽ gửi mail cho bạn sớm nhât');
            		redirect('cart');
            	}
            }
		}
		$this->data['temp'] = 'site/order/checkout';
        $this->load->view('site/layout', $this->data);
	}

}

/* End of file Order.php */
/* Location: ./application/controllers/Order.php */
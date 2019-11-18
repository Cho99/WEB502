<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cart extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Tour_model');
		$this->load->library('form_validation');
	}

	public function index()
	{
		//Thông tin giỏi hàng
		$cart = $this->cart->contents();

		//Tổng số sản phẩm
		$total_items = $this->cart->total_items();
		$this->data['total_items'] = $total_items;

		$this->data['carts'] = $cart;
		$this->data['temp'] = 'site/cart/index';
		$this->load->view('site/layout', $this->data);
	}

	public function add() {
		$id = $this->input->post('id');
		$tour = $this->Tour_model->get_info($id);
		$this->data['tour'] = $tour;
		if (!$tour) {
			redirect();
		}
		if ($this->input->post()) {
			$this->form_validation->set_rules('ngay_di', 'Ngày đi', 'required|callback_checkday');
			if ($this->form_validation->run()) {
				//Tổng số sản phẩm mặc định
				$qty = 1;
				$price = $tour->price;
				$ngay_di = $this->input->post('ngay_di');
				$ngay_di = strtotime($ngay_di);
				if ($tour->discount > 0) {
					$price = $tour->price - $tour->discount;
				}
				$data = array();

				$data['id'] = $tour->id;	
				$data['qty'] = $qty;
				$data['name'] = url_title($tour->name);
				$data['image_link'] = $tour->image_link;
				$data['ngay_di']    = $ngay_di;
				$data['price'] = $price;
				$data['amount'] = $tour->amount;
				$data['booked'] = $tour->booked;
				$data['created'] = now();
				$this->cart->insert($data);
				redirect(base_url('cart'));
			}	
		}
		$this->data['temp'] = 'site/tour/index';
		$this->load->view('site/layout', $this->data); 
	}

	public function update() {
		$cart = $this->cart->contents();
		foreach ($cart as $key => $row) {
			//Tổng số lượng sản phẩm
			$total_qty = $this->input->post('qty_'.$row['id']);
			$ngay_di = $this->input->post('day_'.$row['id']);
			$ngay_di = strtotime($ngay_di);
			$data = array();
			$data['rowid'] = $key;
			$data['qty'] = $total_qty;
			$data['ngay_di'] = $ngay_di;
			$this->cart->update($data);
		}	
		redirect(base_url('cart'));
	}
	public function del() {
		$id = $this->uri->rsegment(3);
		$id = intval($id);
		if ($id > 0) {
			  $cart = $this->cart->contents();
			  foreach ($cart as $key=> $row) {
				// Tổng số lượng sản phẩm
				if ($row['id'] == $id) {
					  $data = array();
		        $data['rowid'] = $key;
		        $data['qty'] = 0;
		        $this->cart->update($data);
				} 
	     	}
		}else {
			// Xóa toàn bộ giỏ hàng
			$this->cart->destroy();
		}
		redirect(base_url('cart'));
	}

	function checkday() {
		$ngay_di = $this->input->post('ngay_di');
		$ngay_di = strtotime($ngay_di);
		if (get_date($ngay_di) < get_date(now())) {
			return FALSE;
		}else {
			return True;
		}
	}

}

/* End of file Cart.php */
/* Location: ./application/controllers/Cart.php */
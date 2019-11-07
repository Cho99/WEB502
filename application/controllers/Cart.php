<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cart extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Tour_model');
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
		$id = $this->uri->rsegment(3);
		$tour = $this->Tour_model->get_info($id);
		if (!$tour) {
			redirect();
		}
		//Tổng số sản phẩm mặc định
		$qty = 1;
		$price = $tour->price;
		if ($tour->discount > 0) {
			$price = $tour->price - $tour->discount;
		}
		$data = array();
		
		$data['id'] = $tour->id;	
		$data['qty'] = $qty;
		$data['name'] = url_title($tour->name);
		$data['image_link'] = $tour->image_link;
		$data['price'] = $price;
		$data['ngay_di'] = $tour->ngay_di;
		$data['ngay_ve'] = $tour->ngay_ve;
		$data['created'] = now();
		$this->cart->insert($data);
		redirect(base_url('cart'));
	}

	public function update() {
		$cart = $this->cart->contents();
		foreach ($cart as $key => $row) {
			//Tổng số lượng sản phẩm
			$total_qty = $this->input->post('qty_'.$row['id']);
			$data = array();
			$data['rowid'] = $key;
			$data['qty'] = $total_qty;
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

}

/* End of file Cart.php */
/* Location: ./application/controllers/Cart.php */
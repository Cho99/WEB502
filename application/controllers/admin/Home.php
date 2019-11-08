<?php 
  Class Home extends My_controller{
  	function index(){
  		$this->load->model('GiaoDich_model');
		$this->load->model('Order_model');
		$this->load->model('Tour_model');
		$this->load->model('User_model');

  		//B1: Lấy tổng số lượng các Giao dịch ở trong CSDL
		$total_giaodich = $this->GiaoDich_model->get_total();
		$this->data['total_giaodich'] = $total_giaodich;

		$total_tour = $this->Tour_model->get_total();
		$this->data['total_tour'] = $total_tour;

		$total_user = $this->User_model->get_total();
		$this->data['total_user'] = $total_user;
        
        $id = $this->input->get('id');
        $id = intval($id);
		$input['where'] = array();
		if ($id > 0) {
			$input['where']['id'] = $id;
		}
        //B2: Lấy danh sách giao dịch
        $list_giaodich = $this->GiaoDich_model->get_list($input);
        $this->data['list'] = $list_giaodich;

        $list_order = $this->Order_model->get_list($input);
        $this->data['order'] = $list_order;
        $total_price = 0;
        $total_ngay = 0;
        $total_thang = 0;
        foreach ($list_giaodich as $row) {
        	$total_price += $row->so_tien;
        	if (get_date($row->created) == get_date(now())) {
        		$total_ngay += $row->so_tien;
        	}
        	if (date("mm",$row->created) == date("mm", now()) ) {
        		$total_thang += $row->so_tien;
        	}
        }

        $this->data['total_ngay'] = $total_ngay;

        $this->data['total_price'] = $total_price;

        $this->data['total_thang'] = $total_thang;

  	    $this->data['temp'] = 'admin/home/index';
  	    $this->load->view('admin/main', $this->data);
  	}
  }
 ?>
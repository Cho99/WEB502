<?php 
Class Home extends MY_Controller
{
	function index() {
		$this->load->model('Tour_model');
		$input = array();
		
		$tour = $this->Tour_model->get_list();
		$this->data['tour'] = $tour;

		$input['limit'] = array('2', '0');
        $tour_discount = $this->Tour_model->get_list($input);
        $this->data['tour_discount'] = $tour_discount;

        $input['limit'] = array('1', '0');
        $input['order'] = array('discount', 'DESC');
        $tour_max       = $this->Tour_model->get_list($input);
        $this->data['tour_max'] = $tour_max;

        
        $input['limit'] = array('8', '0');
        $input['order'] = array('view', 'DESC');
        $tour_view = $this->Tour_model->get_list($input);
        $this->data['tour_view'] = $tour_view;



		$this->data['temp'] = 'site/home/index';
		$this->load->view('site/layout', $this->data);
	}

	public function search_auto() {
		$this->load->model('Tour_model');
		$search = $this->input->get('term');
		$data['search']  = $this->Tour_model->search($search);
		foreach ($data['search']  as $row) {
			$reslut[] = array('label' => $row['name']);
		}
		echo json_encode($reslut);
		die();
	}

	public function timkiem() {
		$this->load->model('Tour_model');
		$key = $this->input->get('mykey');
		$input['like'] =  array('name', $key);
		$list = $this->Tour_model->get_list($input);
		$this->data['list'] = $list;

        $this->data['temp'] = 'site/tour/timkiem';
		$this->load->view('site/layout', $this->data);		
	}
}
 ?>
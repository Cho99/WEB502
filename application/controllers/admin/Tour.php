<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tour extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Tour_model');
		$this->load->model('Catalog_model');
		$this->load->helper('form');	

		$this->load->library('form_validation');
		$this->load->library('pagination');
		$this->load->library('upload_library');
	}

	public function index()
	{
		//lay tong so luong ta ca cac san pham trong websit
        $total_rows = $this->Tour_model->get_total();
        $this->data['total_rows'] = $total_rows;

        //Phân trang

        $config = array();
        $config['total_rows'] = $total_rows;//tong tat ca cac san pham tren website
        $config['base_url']   = admin_url('tour/index'); //link hien thi ra danh sach san pham
        $config['per_page']   = 5;//so luong tour hien thi tren 1 trang
        $config['uri_segment'] = 4;//phan doan hien thi ra so trang tren url
        $config['next_link']   = 'Trang kế tiếp';
        $config['prev_link']   = 'Trang trước';
        //khoi tao cac cau hinh phan trang
        $this->pagination->initialize($config);
        
        $segment = $this->uri->segment(4);
        $segment = intval($segment);
        
        $input = array();
        $input['limit'] = array($config['per_page'], $segment);

        //kiem tra co thuc hien loc du lieu hay khong
        $id = $this->input->get('id');
        $id = intval($id);
        $input['where'] = array();
        if ($id > 0) {
        	$input['where']['id'] = $id;
        }

        $name = $this->input->get('name');
        if ($name) {
        	$input['like'] = array('name', $name);
        }
        $catalog_id = $this->input->get('catalog');
        $catalog_id = intval($catalog_id);
        if($catalog_id > 0)
        {
            $input['where']['catalog_id'] = $catalog_id;
        }
        //Lấy danh sách Tour du lịch
        $list = $this->Tour_model->get_list($input);
        $this->data['list'] = $list;

        //Lấy danh sách danh mục sản phẩm
        $input = array();
        $catalogs = $this->Catalog_model->get_list($input);
        $this->data['catalogs'] = $catalogs;


		//lay nội dung của biến message
        $message = $this->session->flashdata('message');
        $this->data['message'] = $message;

		$this->data['temp'] = 'admin/tour/index';
		$this->load->view('admin/main',$this->data);
	}

	public function add() {
		//Lấy Danh sách của Vùng Miền
        // Tạo một biết điệu kiện để lấy các catalog có id = 0
		$input = array();
		$input['where'] = array('parent_id' => 0);
        $catalogs = $this->Catalog_model->get_list($input);
        foreach ($catalogs as $row)
        {
            $input['where'] = array('parent_id' => $row->id);
            $subs = $this->Catalog_model->get_list($input);
            $row->subs = $subs;  
        }
        $this->data['catalogs'] = $catalogs;

        if ($this->input->post()) {
        	$this->form_validation->set_rules('name', 'Tên', 'required');
            $this->form_validation->set_rules('catalog', 'Thể loại', 'required');
            $this->form_validation->set_rules('ngay_di', 'Ngày đi', 'required|callback_check_ngay');
            $this->form_validation->set_rules('ngay_ve', 'Ngày về', 'required|callback_check_ngay');
            $this->form_validation->set_rules('price', 'Giá', 'required');
            $this->form_validation->set_rules('amount', 'Số lượng', 'required');
            $this->form_validation->set_rules('content', 'Nội dung', 'required');
            if ($this->form_validation->run()) {
            	$name        = $this->input->post('name');
            	$catalog_id  = $this->input->post('catalog');
            	$ngay_di     = $this->input->post('ngay_di');
            	$ngay_ve     = $this->input->post('ngay_ve');
            	$amount      = $this->input->post('amount');
            	$content     = $this->input->post('content');
            	$price       = $this->input->post('price');
            	$price       = str_replace(',', '', $price);
            	$discount    = $this->input->post('discount');
            	$discount    = str_replace(',', '', $discount);

                /* $upload_path: Lấy đường dẫn mà File sẽ được lưu
                ** $upload_data: Upload vào Ảnh có đường dễn là $upload_path. Trong đó cần đường dẫn và ảnh được truyền vào
                $image_link là biến sẽ nhận được tên của ảnh
                + Cách show dữ liệu:
                ở đây lấy tên ảnh sau đó ghép đường dẫn của File vào là sẽ lấy được ảnh ra màn hình chính
                */

            	$upload_path = './upload/tour';
            	$upload_data = $this->upload_library->upload($upload_path, 'image');
            	$image_link = '';
            	if (isset($upload_data['file_name'])) {
            		$image_link = $upload_data['file_name'];
            	}
            	$data = array(
            		'catalog_id' => $catalog_id,
            		'name'       => $name,
            		'price'      => $price,
            		'discount'   => $discount,
            		'image_link' => $image_link,
                    'amount'     => $amount,
            		'ngay_di'    => $ngay_di,
            		'ngay_ve'    => $ngay_ve,
            		'content'    => $content,
            		'created'    => now(),
            	);
            	if ($this->Tour_model->create($data)) {
        		//tạo ra nội dung thông báo
            		$this->session->set_flashdata('message', 'Thêm mới Tour du lịch thành công');
            	}else{
            		$this->session->set_flashdata('message', 'Không thêm được Tour du lịch');
            	}
            //chuyen tới trang danh sách
            	redirect(admin_url('tour'));
            }   
        } 
        $this->data['temp'] = 'admin/tour/add';
        $this->load->view('admin/main', $this->data);
	}

    public function edit() {
        $id = $this->uri->rsegment(3);
        $tour = $this->Tour_model->get_info($id);
        if (!$tour) {
          $this->session->set_flashdata('massage', 'Không tồn tại Tour này');
          redirect(admin_url('tour'));  
        }
        $this->data['tour'] = $tour;

        $input = array();
        $input['where'] = array('parent_id' => 0);
        $catalogs = $this->Catalog_model->get_list($input);
        foreach ($catalogs as $row)
        {
            $input['where'] = array('parent_id' => $row->id);
            $subs = $this->Catalog_model->get_list($input);
            $row->subs = $subs;
        }
        $this->data['catalogs'] = $catalogs;
        if ($this->input->post()) {
            $this->form_validation->set_rules('name', 'Tên', 'required');
            $this->form_validation->set_rules('ngay_di', 'Ngày đi', 'required|callback_check_ngay');
            $this->form_validation->set_rules('ngay_ve', 'Ngày về', 'required|callback_check_ngay');
            $this->form_validation->set_rules('catalog', 'Thể loại', 'required');
            $this->form_validation->set_rules('price', 'Giá', 'required');
            $this->form_validation->set_rules('amount', 'Số lượng', 'required');
            $this->form_validation->set_rules('content', 'Nội dung', 'required');
            if ($this->form_validation->run()) {
                $name        = $this->input->post('name');
                $catalog_id  = $this->input->post('catalog');
                $ngay_di     = $this->input->post('ngay_di');
                $ngay_ve     = $this->input->post('ngay_ve');
                $amount      = $this->input->post('amount');
                $content     = $this->input->post('content');
                $price       = $this->input->post('price');
                $price       = str_replace(',', '', $price);
                $discount    = $this->input->post('discount');
                $discount    = str_replace(',', '', $discount);

                /* $upload_path: Lấy đường dẫn mà File sẽ được lưu
                ** $upload_data: Upload vào Ảnh có đường dễn là $upload_path. Trong đó cần đường dẫn và ảnh được truyền vào
                $image_link là biến sẽ nhận được tên của ảnh
                + Cách show dữ liệu:
                ở đây lấy tên ảnh sau đó ghép đường dẫn của File vào là sẽ lấy được ảnh ra màn hình chính
                */

                $upload_path = './upload/tour';
                $upload_data = $this->upload_library->upload($upload_path, 'image');
                $image_link = '';
                if (isset($upload_data['file_name'])) {
                    $image_link = $upload_data['file_name'];
                }    
                $data = array(
                    'catalog_id' => $catalog_id,
                    'name'       => $name,
                    'price'      => $price,
                    'discount'   => $discount,
                    'amount'     => $amount,
                    'ngay_di'    => $ngay_di,
                    'ngay_ve'    => $ngay_ve,
                    'content'    => $content,
                );
                if ($image_link !='') {
                    $data['image_link'] = $image_link;
                }else {
                    $data['image_link'] = $tour->image_link;
                }
                if ($this->Tour_model->update($id, $data)) {
                //tạo ra nội dung thông báo
                    $this->session->set_flashdata('message', 'Cập nhật Tour du lịch thành công');
                }else{
                    $this->session->set_flashdata('message', 'Cập nhật Thát bại');
                }
                redirect(admin_url('tour'));
            }
        }

        $this->data['temp'] = 'admin/tour/edit';
        $this->load->view('admin/main', $this->data);
    }

    public function del() {
        $id = $this->uri->rsegment(3);
        $this->_del($id);
        $this->session->set_flashdata('massage', 'Xóa thành công sản phẩm');
        redirect(admin_url('tour'));   
    }
    public function _del($id) {
        $tour = $this->Tour_model->get_list($id);
        if (!$tour) {
            $this->session->set_flashdata('massage', 'Không tồn tại Tour này');
           redirect(admin_url('tour'));   
        }
        //Thực hiện xóa Tour du lịch
        $this->Tour_model->delete($id);
        //Xóa ảnh của Tour
        $image_link = './upload/tour/'.$tour->image_link;
        if (file_exists($image_link)) {
            unlink($image_link);
        }
    }

    public function check_ngay() {
        $ngay_di = $this->input->post('ngay_di');
        $ngay_ve = $this->input->post('ngay_ve');
        if ($ngay_di < $ngay_ve) {
            return TRUE;
            die();
        }else {
            return FAlSE;
        }
        
    }

}

/* End of file Tour.php */
/* Location: ./application/controllers/Tour.php */
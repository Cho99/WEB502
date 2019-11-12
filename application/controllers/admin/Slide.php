<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Slide extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Slide_model');
		$this->load->library('upload_library');
	}

	public function index()
	{
		$total_rows = $this->Slide_model->get_total();
		$this->data['total_rows'] = $total_rows;

		$input = array();
		$id = $this->input->get('id');
		$id = intval($id);
		if ($id) {
			$input['where']['id'] = $id;
		}
		$list = $this->Slide_model->get_list($input);
		$this->data['list'] = $list;

		$message = $this->session->flashdata('message');
        $this->data['message'] = $message;


		$this->data['temp'] = 'admin/noidung/slide';
		$this->load->view('admin/main', $this->data);
	}

	public function add() {
		if ($this->input->post()) {
			// B2: Kiểm tra với Form_validation

			$ten = $this->input->post('ten');
			$tieude = $this->input->post('tieude');
			$noidung = $this->input->post('noidung');

			$upload_path = './upload/slide';
			$upload_data = $this->upload_library->upload($upload_path, 'image');
			$image_link = '';
			if (isset($upload_data['file_name'])) {
				$image_link = $upload_data['file_name'];
			}

			$data = array(
				'ten' => $ten,
				'tieude' => $tieude,
				'image_link' => $image_link,
				'noidung' => $noidung,
				'created' => now(),
			);
			if ($this->Slide_model->create($data)) {
				$this->session->set_flashdata('message', 'Thêm mới Banner thành công');
			}else {
				$this->session->set_flashdata('message', 'Thêm mới Banner không thành công');
			}	
			redirect(admin_url('slide'));

		}
		$this->data['temp'] = 'admin/noidung/add_slide';
		$this->load->view('admin/main', $this->data);
	}

	public function edit() {
		$id = $this->uri->rsegment(3);
		$slide = $this->Slide_model->get_info($id);
        if (!$slide) {
          $this->session->set_flashdata('massage', 'Không tồn tại slide này');
          redirect(admin_url('slide'));  
        }
        $this->data['slide'] = $slide;
        if ($this->input->post()) {
        	$ten = $this->input->post('ten');
        	$tieude = $this->input->post('tieude');
        	$noidung = $this->input->post('noidung');


        	$upload_path = './upload/slide';
        	$upload_data = $this->upload_library->upload($upload_path, 'image');
        	$image_link = '';
        	if (isset($upload_data['file_name'])) {
        		$image_link = $upload_data['file_name'];
        	}    
        	$data = array(
        		'ten' => $ten,
        		'tieude' => $tieude,
        		'noidung' => $noidung,
        	);
        	if ($image_link !='') {
        		$data['image_link'] = $image_link;
        	}else {
        		$data['image_link'] = $slide->image_link;
        	}
        	if ($this->Slide_model->update($id, $data)) {
                //tạo ra nội dung thông báo
        		$this->session->set_flashdata('message', 'Cập nhật Slide thành công');
        	}else{
        		$this->session->set_flashdata('message', 'Cập nhật Thất bại');
        	}
        	redirect(admin_url('slide'));
        }
        $this->data['temp'] = 'admin/noidung/edit_slide';
        $this->load->view('admin/main', $this->data);
	}

	public function del() {
        $id = $this->uri->rsegment(3);
        $this->_del($id);
        $this->session->set_flashdata('massage', 'Xóa thành công sản phẩm');
        redirect(admin_url('slide'));   
    }
    public function _del($id) {
        $slide = $this->Slide_model->get_list($id);
        if (!$slide) {
            $this->session->set_flashdata('massage', 'Không tồn tại Slide này');
           redirect(admin_url('slide'));   
        }
        //Thực hiện xóa Tour du lịch
        $this->Slide_model->delete($id);
        //Xóa ảnh của Tour
        $image_link = './upload/slide/'.$slide->image_link;
        if (file_exists($image_link)) {
            unlink($image_link);
        }
    }

}

/* End of file Slide.php */
/* Location: ./application/controllers/Slide.php */
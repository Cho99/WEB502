<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->data['temp'] = 'site/contact/index';
		$this->load->view('site/layout', $this->data);
	}

}

/* End of file Contact.php */
/* Location: ./application/controllers/Contact.php */
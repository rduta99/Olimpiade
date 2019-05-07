<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends MY_Controller {

	public function index()
	{
		$this->data['content'] = 'main';
		$this->data['title'] = '';
		$this->load->view('template/template');
	}
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
    $data['users'] = $this->db->get('users')->result();

    $this->load->view('layout/header');
		$this->load->view('home', $data);
    $this->load->view('layout/footer');
	}

	public function create()
	{
    if ($this->input->server('REQUEST_METHOD') === 'POST') {
      $data = $this->input->post();

      $this->db->insert('users', $data);

      redirect('home');
    } else {
      $this->load->view('layout/header');
      $this->load->view('create');
      $this->load->view('layout/footer');
    }
	}
}

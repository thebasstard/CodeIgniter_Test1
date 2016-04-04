<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class liens extends CI_Controller {

	public function liste()
	{
		$this->load->database();
		$data["liste"] = $this->db->query('SELECT * FROM liens');
		$this->load->view('liens/liste', $data);
	}

	public function ajout()
	{
		$this->load->view('liens/ajout');

	}

	public function script_ajout()
	{
		$data = $this->input->post();
		$this->load->database();
		$str = $this->db->insert_string('Liens',$data);
		$this->db->simple_query($str);

		$this->load->helper('url');
		redirect('/liens/index', 'location');
	}
}

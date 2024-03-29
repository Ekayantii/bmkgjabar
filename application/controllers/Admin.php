<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
        # Query / memanggil database agar datanya muncul di tabel
        $data['admin_menu'] = $this->db->get_where('admin_menu')->result_array();

        $data['admin'] = $this->db->get_where('admin',['email' => $this->session->userdata('email')])->row_array();
        
        $this->load->view('template/admin_header',$data);
        $this->load->view('template/admin_sidebar',$data);
        $this->load->view('template/admin_topbar',$data);
        $this->load->view('admin/index',$data);
        $this->load->view('template/admin_footer',$data);
	}

        
}
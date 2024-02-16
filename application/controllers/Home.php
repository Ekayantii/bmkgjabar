<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function index()
	{
		$this->load->view('template/home_header');
		$this->load->view('template/home_navbar');
		$this->load->view('home/index');
		$this->load->view('template/home_footer');
	}

	public function about()
	{

		# Query / memanggil database agar datanya muncul di tabel
        $data['about'] = $this->db->get_where('about')->result_array();

		$this->load->view('template/home_header', $data);
		$this->load->view('template/home_navbar', $data);
		$this->load->view('home/about', $data);
		$this->load->view('template/home_footer', $data);
	}



#------------------------------------------------------------------------
	
	
	public function PDCJ()
	{
		$this->load->view('template/home_header');
		$this->load->view('template/home_navbar');
		$this->load->view('home/PDCJ');
		$this->load->view('template/home_footer');
	}

	public function PCJ()
	{
		$this->load->view('template/home_header');
		$this->load->view('template/home_navbar');
		$this->load->view('home/PCJ');
		$this->load->view('template/home_footer');
	}

	public function PCBD()
	{
		$this->load->view('template/home_header');
		$this->load->view('template/home_navbar');
		$this->load->view('home/PCBD');
		$this->load->view('template/home_footer');
	}

	public function PC3H()
	{
		$this->load->view('template/home_header');
		$this->load->view('template/home_navbar');
		$this->load->view('home/PC3H');
		$this->load->view('template/home_footer');
	}

	public function cuaca_wilayah()
	{
		$this->load->view('template/home_header');
		$this->load->view('template/home_navbar');
		$this->load->view('home/cuaca_wilayah');
		$this->load->view('template/home_footer');
	}

	public function PDIJ()
	{
		$this->load->view('template/home_header');
		$this->load->view('template/home_navbar');
		$this->load->view('home/PDIJ');
		$this->load->view('template/home_footer');
	}

	public function HTHJ()
	{
		$this->load->view('template/home_header');
		$this->load->view('template/home_navbar');
		$this->load->view('home/HTHJ');
		$this->load->view('template/home_footer');
	}

	public function ACHDSH()
	{
		$this->load->view('template/home_header');
		$this->load->view('template/home_navbar');
		$this->load->view('home/ACHDSH');
		$this->load->view('template/home_footer');
	}

	public function NHB()
	{
		$this->load->view('template/home_header');
		$this->load->view('template/home_navbar');
		$this->load->view('home/NHB');
		$this->load->view('template/home_footer');
	}

	public function NMKH()
	{
		$this->load->view('template/home_header');
		$this->load->view('template/home_navbar');
		$this->load->view('home/NMKH');
		$this->load->view('template/home_footer');
	}

	public function PCM()
	{
		$this->load->view('template/home_header');
		$this->load->view('template/home_navbar');
		$this->load->view('home/PCM');
		$this->load->view('template/home_footer');
	}

	public function buletin()
	{
		$this->load->view('template/home_header');
		$this->load->view('template/home_navbar');
		$this->load->view('home/buletin');
		$this->load->view('template/home_footer');
	}

	public function Berita()
	{
		$this->load->view('template/home_header');
		$this->load->view('template/home_navbar');
		$this->load->view('home/Berita');
		$this->load->view('template/home_footer');
	}

	public function Galeri()
	{
		$this->load->view('template/home_header');
		$this->load->view('template/home_navbar');
		$this->load->view('home/Galeri');
		$this->load->view('template/home_footer');
	}

	#---------HALAMAN ADMIN------------------#


}

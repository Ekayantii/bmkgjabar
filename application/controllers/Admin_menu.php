<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_menu extends CI_Controller {

	public function index()
	{
        $data['admin'] = $this->db->get_where('admin',['email' =>$this->session->userdata('email')])->row_array();

        # Query / memanggil database agar datanya muncul di tabel
        $data['admin_menu'] = $this->db->get_where('admin_menu')->result_array();
        
        # Set Rules

        $this->form_validation->set_rules('nama', 'Nama Menu', 'required|trim');
        $this->form_validation->set_rules('icon', 'Icon', 'required|trim');
        $this->form_validation->set_rules('url', 'Url', 'required|trim');
        
        if ($this->form_validation->run() == false) {

            $this->load->view('template/admin_header',$data);
            $this->load->view('template/admin_sidebar',$data);
            $this->load->view('template/admin_topbar',$data);
            $this->load->view('admin_menu/index',$data);
            $this->load->view('template/admin_footer',$data);

        } else {

            $data=[

                'nama' => $this->input->post('nama'),
                'icon' => $this->input->post('icon'),
                'url' => $this->input->post('url'),

            ];

            # Insert database di atas ke dalam tabel admin_menu

            $this->db->insert('admin_menu', $data);

            $this->session->set_flashdata('pesan', '<div class="alert alert-primary" role="alert">
			Selamat data menu telah ditambahkan! </div>');
            redirect('admin_menu');
        }

	}

    Public function edit($id)
    {
        $data['admin'] = $this->db->get_where('admin',['email' =>$this->session->userdata('email')])->row_array();

        $data['admin_menu'] = $this->db->get_where('admin_menu', ['id' => $id])->row_array();

        # Set Rules untuk edit menu
        $this->form_validation->set_rules('nama', 'Nama Menu', 'required|trim');
        $this->form_validation->set_rules('icon', 'Icon', 'required|trim');
        $this->form_validation->set_rules('url', 'Url', 'required|trim');

        if ($this->form_validation->run() == false) {

            $this->load->view('template/admin_header',$data);
            //$this->load->view('template/admin_sidebar',$data);
            $this->load->view('template/admin_topbar',$data);
            $this->load->view('admin_menu/edit',$data);
            $this->load->view('template/admin_footer',$data);

        } else {

           $nama = $this->input->post('nama', true);
           $icon = $this->input->post('icon', true);
           $url  = $this->input->post('url', true);

            # Set data yang mau di update
            $this->db->set('nama', $nama);
            $this->db->set('icon', $icon);
            $this->db->set('url', $url);
            $this->db->where('id', $this->input->post('id'));
           
            # Update data ke dalam tabel admin_menu
            $this->db->update('admin_menu');
            $this->session->set_flashdata('pesan', '<div class="alert alert-primary" role="alert">
			Selamat data menu telah diupdate! </div>');
            redirect('admin_menu');
        }
    }

    //Fungsi hapus
    public function hapus($id)
    {
        $data['admin'] = $this->db->get_where('admin',['email' =>$this->session->userdata('email')])->row_array();

        //hapus data yang ada didalam admin_menu
        $this->db->delete('admin_menu', ['id' => $id]);
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
		Selamat data menu telah dihapus! </div>');
        redirect('admin_menu');
    }


    public function about()
    {

        $data['judul'] = 'About';

        $data['admin'] = $this->db->get_where('admin',['email' =>$this->session->userdata('email')])->row_array();

        # Query / memanggil database agar datanya muncul di tabel
        $data['admin_menu'] = $this->db->get_where('admin_menu')->result_array();

        # Query / memanggil database agar datanya muncul di tabel
        $data['about'] = $this->db->get_where('about')->result_array();
        
        # Set Rules

        $this->form_validation->set_rules('hb', 'Header bio', 'required|trim');
        $this->form_validation->set_rules('jb', 'Judul Bio', 'required|trim');
        $this->form_validation->set_rules('detail_bio', 'Detail Bio', 'required|trim');
        
        if ($this->form_validation->run() == false) {

            $this->load->view('template/admin_header',$data);
            $this->load->view('template/admin_sidebar',$data);
            $this->load->view('template/admin_topbar',$data);
            $this->load->view('admin_menu/about',$data);
            $this->load->view('template/admin_footer',$data);

        } else {

            $data=[

                'hb' => $this->input->post('hb'),
                'jb' => $this->input->post('jb'),
                'detail_bio' => $this->input->post('detail_bio'),

            ];

            # Insert database di atas ke dalam tabel admin_menu

            $this->db->insert('about', $data);

            $this->session->set_flashdata('pesan', '<div class="alert alert-primary" role="alert">
			Selamat data about anda telah ditambahkan! </div>');
            redirect('admin_menu/about');
        }


    }

    Public function edit_about($id)
    {
        $data['admin'] = $this->db->get_where('admin',['email' =>$this->session->userdata('email')])->row_array();

        $data['about'] = $this->db->get_where('about', ['id' => $id])->row_array();

        # Query / memanggil database agar datanya muncul di tabel
        $data['about'] = $this->db->get_where('about')->result_array();

        # Set Rules
        $this->form_validation->set_rules('hb', 'Header bio', 'required|trim');
        $this->form_validation->set_rules('jb', 'Judul Bio', 'required|trim');
        $this->form_validation->set_rules('detail_bio', 'Detail Bio', 'required|trim');

        if ($this->form_validation->run() == false) {

            $this->load->view('template/admin_header',$data);
            //$this->load->view('template/admin_sidebar',$data);
            $this->load->view('template/admin_topbar',$data);
            $this->load->view('admin_menu/edit_about',$data);
            $this->load->view('template/admin_footer',$data);

        } else {

           $nama = $this->input->post('hb', true);
           $icon = $this->input->post('jb', true);
           $url  = $this->input->post('detail_bio', true);

            # Set data yang mau di update
            $this->db->set('hb', $hb);
            $this->db->set('jb', $jb);
            $this->db->set('detail_bio', $detail_bio);
            $this->db->where('id', $this->input->post('id'));
           
            # Update data ke dalam tabel about
            $this->db->update('about');
            $this->session->set_flashdata('pesan', '<div class="alert alert-primary" role="alert">
			Selamat data menu telah diupdate! </div>');
            redirect('admin_menu/about');
        }
    }

    public function PDCJ()
    {
        $data['judul'] = 'PDCJ';

        $data['admin'] = $this->db->get_where('admin',['email' =>$this->session->userdata('email')])->row_array();

        # Query / memanggil database agar datanya muncul di tabel
        $data['admin_menu'] = $this->db->get_where('admin_menu')->result_array();

        // Query tabel (ambil tabelnya)
        $data['PDCJ'] = $this->db->get_where('PDCJ')->result_array();
        

        // Set Rules
        $this->form_validation->set_rules('judul', 'Judul', 'required|trim');
        $this->form_validation->set_rules('slug', 'Slug', 'required|trim');
        $this->form_validation->set_rules('isi_blog', 'Isi Blog', 'required|trim');
        $this->form_validation->set_rules('created_by', 'Created By', 'required|trim');

        if ($this->form_validation->run() == false) {

            $this->load->view('template/admin_header', $data);
            $this->load->view('template/admin_sidebar', $data);
            $this->load->view('template/admin_topbar', $data);
            $this->load->view('admin_menu/PDCJ', $data);
            $this->load->view('template/admin_footer', $data);
        } else {

            $config['upload_path']      = './front-end/assets/img/PDCJ';
            $config['allowed_types']    = 'png|jpg|jpeg|gif';
            $config['max_size']         = 2048;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('image')) {
                $this->session->set_flashdata('pesan', '<div class="alert alert-denger" role="alert"> Foto Berita anda belum diupload! </div>');
                redirect('admin_menu/PDCJ');
            } else {
                $gambar         = $this->upload->data();
                $gambar         = $gambar['file_name'];
                $judul          = $this->input->post('judul', true);
                $slug           = $this->input->post('slug', true);
                $isi_blog       = $this->input->post('isi_blog', true);
                $created_by     = $this->input->post('created_by', true);
                
            }
            $data = [
                'judul'      => $judul,
                'image'      => $gambar,
                'slug'       => $slug,
                'isi_blog'   => $isi_blog,
                'created_by' => $created_by,
                'created_at' => time()
            ];

            // insert ke tabel admin menu
            $this->db->insert('PDCJ', $data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-primary" role="alert"> Selamat, Data Berita anda telah ditambahkan! </div>');
            redirect('admin_menu/PDCJ');
        }
    }


}
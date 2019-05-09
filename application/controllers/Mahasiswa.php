<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->model('Model_mahasiswa');
        $this->load->model('Model_jurusan');	
    }
	
	function index() 
	{	
		$data['mahasiswa'] = $this->Model_mahasiswa->getDataMahasiswa()->result();
		$data['content'] = 'Mahasiswa/list';
		$this->load->view('Template', $data);
	}

	function add() 
	{	
		$data['jurusan'] = $this->Model_jurusan->getDataJurusan()->result();
		$data['content'] = 'Mahasiswa/Add';
		$this->load->view('Template', $data);
	}

    function action_add(){	       
		$data = array(
			'nim' 			=> $this->input->post('nim'),
			'nama_mhs' 		=> $this->input->post('nama_mhs'),
			'tgl_lahir' 	=> $this->input->post('tgl_lahir'),
			'alamat' 		=> $this->input->post('alamat'),
			'jenis_kelamin' => $this->input->post('jenis_kelamin'),
			'id_jurusan' 	=> $this->input->post('id_jurusan')
		);

		if (($this->Model_mahasiswa->actionAdd($data))==true)
		{
			$this->session->set_flashdata('message', 'Tambah Mahasiswa Sukses');
			redirect('Mahasiswa','refresh');			
		}else{
			$this->session->set_flashdata('message_error', 'Tambah Mahasiswa Gagal');
			redirect('Mahasiswa','refresh');
		}
    }

    function update($id)
    {
    	$row = $this->Model_mahasiswa->get_by_id($id);

    	$data = array (
    		'id_mhs' => set_value('id_mhs', $row->id_mhs),
			'nim' => set_value('nim', $row->nim),
			'nama_mhs' => set_value('nama_mhs', $row->nama_mhs),
			'tgl_lahir' => set_value('tgl_lahir', $row->tgl_lahir),
			'alamat' => set_value('alamat', $row->alamat),
			'jenis_kelamin' => set_value('jenis_kelamin', $row->jenis_kelamin),
			'id_jurusan' => set_value('id_jurusan', $row->id_jurusan),
			'jurusan' => $this->Model_jurusan->getDataJurusan()->result()
    	);

    	$data['content'] = 'Mahasiswa/Update';
		$this->load->view('Template', $data);
    }

    function action_update()
    {
    	$param = $this->input->post('id_mhs');

    	$data = array (
			'nim' => $this->input->post('nim'),
			'nama_mhs' => $this->input->post('nama_mhs'),
			'tgl_lahir' => $this->input->post('tgl_lahir'),
			'alamat' => $this->input->post('alamat'),
			'jenis_kelamin' => $this->input->post('jenis_kelamin'),
			'id_jurusan' => $this->input->post('id_jurusan')
    	);

    	if(($this->Model_mahasiswa->actionUpdate($param, $data)) == true)
		{
	    	$this->session->set_flashdata('message', 'Update Mahasiswa Sukses');
			redirect('Mahasiswa','refresh');
		}else{
			$this->session->set_flashdata('message_error', 'Update Mahasiswa Gagal');
			redirect('Mahasiswa','refresh');
		}
    }

	function delete($id) 
    {
        $row = $this->Model_mahasiswa->get_by_id($id);

        if($row){
            $this->Model_mahasiswa->delete($id);
            $this->session->set_flashdata('message', 'Delete Mahasiswa Sukses');
			redirect('Mahasiswa','refresh');
        }else{
            $this->session->set_flashdata('message_error', 'Delete Mahasiswa Gagal');
			redirect('Mahasiswa','refresh');
        }
    }

}
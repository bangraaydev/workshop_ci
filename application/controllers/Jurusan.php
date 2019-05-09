<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Jurusan extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->model('Model_jurusan');	
    }
	
	function index() 
	{	
		$data['jurusan'] = $this->Model_jurusan->getDataJurusan()->result();
		$data['content'] = 'Jurusan/list';
		$this->load->view('Template', $data);
	}

	function add() 
	{	
		$data['content'] = 'Jurusan/Add';
		$this->load->view('Template', $data);
	}

    function action_add(){	       
		$data = array(
			'nama_jurusan' => $this->input->post('nama_jurusan')
		);

		if (($this->Model_jurusan->actionAdd($data))==true)
		{
			$this->session->set_flashdata('message', 'Tambah Jurusan Sukses');
			redirect('Jurusan','refresh');			
		}else{
			$this->session->set_flashdata('message_error', 'Tambah Jurusan Gagal');
			redirect('Jurusan','refresh');
		}
    }

    function update($id)
    {
    	$row = $this->Model_jurusan->get_by_id($id);

    	$data = array (
			'id_jurusan' => set_value('id_jurusan', $row->id_jurusan),
			'nama_jurusan' => set_value('nama_jurusan', $row->nama_jurusan)
    	);

    	$data['content'] = 'Jurusan/Update';
		$this->load->view('Template', $data);
    }

    function action_update()
    {
    	$param = $this->input->post('id_jurusan');

    	$data = array (
			'nama_jurusan' => $this->input->post('nama_jurusan')
    	);

    	if(($this->Model_jurusan->actionUpdate($param, $data)) == true)
		{
	    	$this->session->set_flashdata('message', 'Update Jurusan Sukses');
			redirect('Jurusan','refresh');
		}else{
			$this->session->set_flashdata('message_error', 'Update Jurusan Gagal');
			redirect('Jurusan','refresh');
		}
    }

	function delete($id) 
    {
        $row = $this->Model_jurusan->get_by_id($id);

        if($row){
            $this->Model_jurusan->delete($id);
            $this->session->set_flashdata('message', 'Delete Jurusan Sukses');
			redirect('Jurusan','refresh');
        }else{
            $this->session->set_flashdata('message_error', 'Delete Jurusan Gagal');
			redirect('Jurusan','refresh');
        }
    }

}
<?php /**
* 
*/
class Model_mahasiswa extends CI_Model
{
	public $table = 'mahasiswa';
	public $id = 'id_mhs';
	public $order = 'DESC';
	
	function __construct() {
        parent::__construct();
    }

	function getDataMahasiswa()
	{
		$this->db->select('*');
		$this->db->from($this->table);
		return $this->db->get();
	}

	function actionAdd($data)
	{
		return $this->db->insert($this->table, $data);
	}

	function get_by_id($id)
	{
		$this->db->where($this->id, $id);
		return $this->db->get($this->table)->row();
	}

	function actionUpdate($param,$data){
		$this->db->where($this->id, $param);
		return $this->db->update($this->table,$data);
	}

	function delete($id)
	{
		$this->db->where($this->id, $id);
		return $this->db->delete($this->table);
	}

} ?>
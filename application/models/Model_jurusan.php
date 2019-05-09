<?php /**
* 
*/
class Model_jurusan extends CI_Model
{
	public $table = 'jurusan';
	public $id = 'id_jurusan';
	public $order = 'DESC';
	
	function __construct() {
        parent::__construct();
    }

	function getDataJurusan()
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
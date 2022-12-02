<?php

class ModelLogin extends CI_Model{
    var $table = "login";
    var $primaryKey = "id_login";

    public function insert($data)
	{
		return $this->db->insert($this->table, $data);
	}

	public function getByUserAndPassword($username){
    	$query = "SELECT * FROM `login`WHERE user = '$username'";
		$result =  $this->db->query($query)->row();
    	if (!$result){
    		return false;
		}
    	return $result;
	}

	public function getAll()
	{
		return $this->db->get($this->table)->result();
	}

	public function getByPrimaryKey($id)
	{
		$this->db->where($this->primaryKey, $id);
		return $this->db->get($this->table)->row();
	}

	public function update($id, $data)
	{
		$this->db->where($this->primaryKey, $id);
		return $this->db->update($this->table, $data);
	}

	public function delete($id)
	{
		$this->db->where($this->primaryKey, $id);
		return $this->db->delete($this->table);
	}
}
<?php

class Siswa_model
{

    private $table = 'siswa', $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllSiswa()
    {
        $this->db->query("SELECT * FROM {$this->table}");
        return $this->db->resultSet();
    }

    public function getSiswaById($id) 
    {
        $this->db->query("SELECT * FROM {$this->table} WHERE id=:id"); // : = menghindari sql injection
        $this->db->bind("id", $id);
        return $this->db->single();
    }
}

<?php

class Siswa_model
{
    // private $siswa = [
    //     [
    //         "nama" => "Tsaqif",
    //         "email" => "tsaqifcakep87@gmail.com",
    //         "jurusan" => "RPL"
    //     ],
    //     [
    //         "nama" => "Ovang",
    //         "email" => "ovanggaming@gmail.com",
    //         "jurusan" => "MI"
    //     ],
    //     [
    //         "nama" => "Test",
    //         "email" => "test@gmail.com",
    //         "jurusan" => "TST"
    //     ]
    // ];

    private $dbh, $stmt; // dbh = database handler, stmt = statement/buat nympan query

    public function __construct()
    {
        // PDO = PHP Data Object
        // data source name / identitas server
        $dsn = "mysql:host=localhost;dbname=belajarphpmvc";

        try {
            $this->dbh = new PDO($dsn, 'root', '');
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function getAllSiswa()
    {
        // return $this->siswa;
        $this->stmt = $this->dbh->prepare("SELECT * FROM siswa");
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);

    }
}

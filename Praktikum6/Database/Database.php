<<<<<<< HEAD
<?php

class Database{
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $databaseName = "perpustakaan";
    private $koneksi;

    public function __construct(){
        $this->koneksi = new mysqli($this->host, $this->username, $this->password, $this->databaseName);
    }

    public function _destruct()
    {
        $this->koneksi->close();
    }

    public function getKoneksi(){
        return $this->koneksi;
    }
=======
<?php

class Database{
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $databaseName = "perpustakaan";
    private $koneksi;

    public function __construct(){
        $this->koneksi = new mysqli($this->host, $this->username, $this->password, $this->databaseName);
    }

    public function _destruct()
    {
        $this->koneksi->close();
    }

    public function getKoneksi(){
        return $this->koneksi;
    }
>>>>>>> 3b0fdfc (menambahkan tugas)
}
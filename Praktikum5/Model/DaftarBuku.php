<<<<<<< HEAD
<?php

require_once "Buku.php";

class DaftarBuku{

    public function getData(){
        $daftar_buku = array(
            new Buku('Belajar Pemrograman Web', 'Surah Annisa', 'Informatika', '2024'),
            new Buku('Matematika Diskrit', 'Taylor', 'Andi Publisher', '2020'),
            new Buku('Kalkulus', 'Ariana', 'Erlangga', '2019'),
            new Buku('Metodologi Penelitian', 'Adelle', 'Pustaka UIN', '2024'),
        );

        return $daftar_buku;
    }

    public function getKolomTabel(){
        return array('No', 'Judul', 'Pengarang', 'Penerbit', 'Tahun');
    }
    
=======
<?php

require_once "Buku.php";

class DaftarBuku{

    public function getData(){
        $daftar_buku = array(
            new Buku('Belajar Pemrograman Web', 'Surah Annisa', 'Informatika', '2024'),
            new Buku('Matematika Diskrit', 'Taylor', 'Andi Publisher', '2020'),
            new Buku('Kalkulus', 'Ariana', 'Erlangga', '2019'),
            new Buku('Metodologi Penelitian', 'Adelle', 'Pustaka UIN', '2024'),
        );

        return $daftar_buku;
    }

    public function getKolomTabel(){
        return array('No', 'Judul', 'Pengarang', 'Penerbit', 'Tahun');
    }
    
>>>>>>> 3b0fdfc (menambahkan tugas)
}
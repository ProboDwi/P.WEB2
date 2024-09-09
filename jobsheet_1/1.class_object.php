<?php
// Definisi Class
class Mahasiswa {
    // Atribut atau properties
    public $nama;
    public $nim;
    public $jurusan;

    // Constructor
    public function __construct($nama, $nim, $jurusan) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    // Metode atau Function
    public function getCetak() {
        return "Nama: $this->nama, Nim: $this->nim, Jurusan: $this->jurusan";
    }
}

// instansiasi objek
$mahasiswa1 = new Mahasiswa("Andi Prasetyo", "123456789", "Teknik Informatika");
echo $mahasiswa1->getCetak();
?>
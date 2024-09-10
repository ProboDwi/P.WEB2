<?php
// definisi class
class Mahasiswa {
    // atribut atau properti
    public $nama;
    public $nim;
    public $jurusan;

    // constructor untuk menginisialisasi atribut
    public function __construct($nama, $nim, $jurusan) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    // function untuk menampilkan data
    public function tampilkanData() {
        return "Mahasiswa: $this->nama, Nim: $this->nim, Jurusan: $this->jurusan";
    }
}

// instansiasi objek
$mahasiswa = new Mahasiswa("Probo", "12345", "TI");
echo $mahasiswa->tampilkanData();
?>
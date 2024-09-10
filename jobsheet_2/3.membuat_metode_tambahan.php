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

    // method atau function untuk menampilkan data
    public function tampilkanData() {
        return "Mahasiswa: $this->nama, Nim: $this->nim, Jurusan: $this->jurusan";
    }

    // method atau function untuk mengubah jurusan
    public function updateJurusan($jurusan) {
        $this->jurusan = $jurusan;
    }
}

// instansiasi objek
$mahasiswa = new Mahasiswa("Probo", "12345", "TI");

// update jurusan
$mahasiswa->updateJurusan("TE");

// menampilkan data yang diambil dari method class Mahasiswa
echo $mahasiswa->tampilkanData();
?>
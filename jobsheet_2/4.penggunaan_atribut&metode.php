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

    // untuk mengambil nilai atribut
    public function getNim(){
        return $this->nim;
    }

    // untuk mengubah atau menetapkan nilai atribut
    public function setNim($nim) {
        $this->nim = $nim;
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

// mengubah nilai atribut dengan metode set
$mahasiswa->setNim("54321");

// menampilkan data yang diambil dari metode class Mahasiswa
echo $mahasiswa->tampilkanData();
?>
<?php
// Definisi Class
class Mahasiswa {
    // Atribut atau properties
    private $nama;
    private $nim;
    private $jurusan;

    // Constructor
    public function __construct($nama, $nim, $jurusan)
    {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    public function getNama() {
        return $this->nama;
    }

    public function getNim() {
        return $this->nim;
    }

    public function getJurusan() {
        return $this->jurusan;
    }

    public function setNama($nama) {
        $this->nama = $nama;
    }

    public function setNim($nim) {
        $this->nim = $nim;
    }

    public function setJurusan($jurusan) {
        $this->jurusan = $jurusan;
    }
}

// Instansiasi Objek
$mahasiswa = new Mahasiswa("Andi Prasetyo", "123456789", "Teknik Informatika");
echo $mahasiswa->getNama();
echo "<br>";
echo $mahasiswa->getNim();
echo "<br>";
echo $mahasiswa->getJurusan();
?>
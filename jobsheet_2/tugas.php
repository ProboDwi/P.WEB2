<?php
// 1. Implementasikan kelas Dosen dengan atribut nama, nip, dan mataKuliah.
// Definisi Kelas
class Dosen {
    // Atribut atau Properties
    public $nama;
    public $nip;
    public $matakuliah;

    // Constructor
    public function __construct($nama, $nip, $matakuliah) {
        $this->nama = $nama;
        $this->nip = $nip;
        $this->matakuliah = $matakuliah;
    }

    // 2. Buat metode tampilkanDosen() untuk menampilkan informasi dosen.
    // Metode atau Function untuk menampilkan data
    public function tampilkanDosen() {
        return "Nama Dosen: $this->nama, NIP: $this->nip, Matakuliah: $this->matakuliah";
    }
}

// 3. Buat objek dari kelas Dosen, dan gunakan metode tampilkanDosen() untuk menampilkan informasi tersebut.
// instansiasi objek
$dosen = new Dosen("Wahyudi", "123456", "OOP");
echo $dosen->tampilkanDosen();
?>
<?php
class Pengguna {
    protected $nama, $nim, $nip;
    public function aksesFitur() {
        echo "Akses fitur pengguna <br>";
    }

    public function getNama() {
        return $this->nama;
    }

    public function setNama($nama) {
        $this->nama = $nama;
    }
}

class Dosen extends Pengguna {
    public function aksesFitur() {
        echo "Akses fitur Dosen: " .$this->getNama(). "<br>";
    }
}

class Mahasiswa extends Pengguna {
    public function aksesFitur() {
        echo "Akses fitur Mahasiswa: " .$this->getNama(). " <br>";
    }
}

$pengguna = new Pengguna();
$pengguna->aksesFitur();

$dosen = new Dosen();
$dosen->setNama("Pak Abdau");
$dosen->aksesFitur();

$mahasiswa = new Mahasiswa();
$mahasiswa->setNama("Alva");
$mahasiswa->aksesFitur();
?>
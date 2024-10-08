<?php
//  1. Implementasikan kelas Person sebagai induk dari Dosen dan Mahasiswa.
// Definisi Kelas
class Person {
    // Atribut atau properties
    protected $nama;
    protected $role;

    // Constructor menginisialisasi atribut
    public function __construct($nama, $role) {
        $this->nama = $nama;
        $this->role = $role;
    }

    // function untuk menampilkan nilai atribut
    public function tampilData() {
        return $this->nama;
    }

// 3. Terapkan Polymorphism dengan membuat metode getRole() di kelas Person dan override metode ini di kelas Dosen dan Mahasiswa untuk menampilkan peran yang berbeda.
    public function getRole() {
        return $this->role;
    }
}

// 2. Gunakan konsep Inheritance untuk membuat hierarki kelas yang memungkinkan Dosen dan Mahasiswa memiliki atribut dan metode yang sesuai dengan perannya.
// Definisi Kelas
class Mahasiswa extends Person {
    // Atribut atau properties
    private $nim; // 4. Gunakan Encapsulation untuk melindungi atribut nidn di kelas Dosen dan nim di kelas Mahasiswa.

    // Constructor
    public function __construct($nama, $nim, $role) {
        parent::__construct($nama, $role);
        $this->nim = $nim;
    }

    // Metode
    public function tampilData() {
        return "Nama: $this->nama <br> Nim: $this->nim";
    }

    // polymorphism (override method getRole())
    public function getRole() {
        return "Role: $this->role";
    }
}

// Definisi Kelas
class Dosen extends Person {
    // Atribut atau properties
    private $nidn; // 4. Gunakan Encapsulation untuk melindungi atribut nidn di kelas Dosen dan nim di kelas Mahasiswa.

    // Constructor
    public function __construct($nama, $nidn, $role) {
        parent::__construct($nama, $role);
        $this->nidn = $nidn;
    }

    // Metode
    public function tampilData() {
        return "Nama: $this->nama <br> NIDN: $this->nidn";
    }

    // polymorphism (override method getRole())
    public function getRole() {
        return "Role: $this->role";
    }
}

// 5. Buat kelas abstrak Jurnal dan implementasikan konsep Abstraction dengan membuat kelas turunan JurnalDosen dan JurnalMahasiswa yang masing-masing memiliki cara tersendiri untuk mengelola pengajuan jurnal.
abstract class Jurnal {
    // Atribut atau properties
    protected $title;
    protected $author;
    protected $status;

    // Constructor
    public function __construct($title, $author, $status) {
        $this->title = $title;
        $this->author = $author;
        $this->status = $status;
    }

    // Metode
    abstract public function statusPengajuan();

    // metode untuk mengambil nilai atribut
    public function getTitle() {
        return $this->title;
    }

    public function getAuthor() {
        return $this->author;
    }

    public function getStatus() {
        return $this->status;
    }
}

class JurnalDosen extends Jurnal {
    // Metode
    public function statusPengajuan() {
        return "Judul: {$this->getTitle()} <br> Nama Dosen: {$this->getAuthor()} <br> Status Pengajuan: {$this->getStatus()}";
    }
}

class JurnalMahasiswa extends Jurnal {
    // Metode
    public function statusPengajuan() {
        return "Judul: {$this->getTitle()} <br> Nama Mahasiswa: {$this->getAuthor()} <br> Status Pengajuan: {$this->getStatus()}";
    }
}

// Inisialisasi objek
$person = new Person("Jamal", "Orang");
echo $person->tampilData();
echo "<br>";
echo $person->getRole();
echo "<br><br>";

$mahasiswa = new Mahasiswa("Alva", "L200180013", "Mahasiswa");
echo $mahasiswa->tampilData();
echo "<br>";
echo $mahasiswa->getRole();
echo "<br><br>";

$dosen = new Dosen("Pak Abdau", "L200180013", "Dosen");
echo $dosen->tampilData();
echo "<br>";
echo $dosen->getRole();
echo "<br><br>";

$jurnalDosen = new JurnalDosen("OOP", "Jamaludin", "Disetujui");
echo $jurnalDosen->statusPengajuan();
echo "<br><br>";

$jurnalMahasiswa = new JurnalMahasiswa("Pemrograman Berorientasi Subjek", "Budi", "Ditolak");
echo $jurnalMahasiswa->statusPengajuan();
echo "<br><br>";
?>
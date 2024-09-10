# Jobsheet 3: Menerapkan Konsep Inheritance, Polymorphism, Encapsulation, dan Abstraction dalam PHP
# Tujuan
Mahasiswa diharapkan mampu menerapkan prinsip OOP dalam pemrograman PHP melalui tugas yang mengintegrasikan konsep Inheritance, Polymorphism, Encapsulation, dan Abstraction.

# Instruksi
### 1. Inheritance
- Buat kelas Person dengan atribut name dan metode getName().
```php
// Definisi class
class Person {
    // Atribut atau properties
    protected $name; // Protected: jenis atribut yang digunakan hanya untuk class itu sendiri dan class turunannya atau yang diwarisi
    
    // Constructor untuk menginisialiasi nilai atribut
    public function __construct($name) {
        $this->name = $name;
    }

    // Metode get untuk mengakses nilai atribut
    public function getName() {
        return $this->name;
    }
}
```

- Buat kelas Student yang mewarisi dari Person dan tambahkan atribut studentID serta metode getStudentID().
```php
// Definisi class
class Student extends Person { //extends untuk tanda telah mewarisi atribut atau method atau function dari class Person
    public $studentID;

    // Constructor untuk menginisialiasi nilai atribut
    public function __construct($name, $studentID) {
        parent::__construct($name); // Parent untuk menginisialisasi nilai atribut yang berada di class induk
        $this->studentID = $studentID;
    }

    // get untuk mengakses nilai atribut
    public function getStudentID() {
        return "ID: " .$this->studentID;
    }
}
```

### 2. Polymorphism
- Buat kelas Teacher yang juga mewarisi dari Person dan tambahkan atribut teacherID.
```php
// Definisi class
class Teacher extends Person { //extends untuk tanda telah mewarisi atribut atau method atau function dari class Person
    // Atribut atau properties
    public $teacherID;
}
```

- Override metode getName() di kelas Student dan Teacher untuk menampilkan format berbeda.
```php
// Polymorphism (Override method) pada class Student
    public function getName() { // Override method: menggunakan metode yang sama (metode yang ada di class induk) dengan implementasi yang berbeda pada class turunan
        return "Nama : ". $this->name;
}

// Polymorphism (Override method) pada class Teachear
    public function getName() { // Override method: menggunakan metode yang sama (metode yang ada di class induk) dengan implementasi yang berbeda pada class turunan
        return "Nama Guru: ". $this->name;
}
```

### 3. Encapsulation
- Ubah atribut studentID dalam kelas Student menjadi private.
```php
class Student extends Person {
    private $studentID; // Ubah atribut studentID dalam kelas Student menjadi private.
```

- Tambahkan metode setter dan getter untuk mengakses dan mengubah nilai atribut name dan studentID.
```php
    // Encapsulation (getter name)
    public function getName() { // getter untuk mengakses nilai atribut
        return "Nama : ". $this->name;
    }

    // Encapsulation (getter studentID)
    public function getStudentID() {
        return "ID: " .$this->studentID;
    }

    // Encapsulation (setter studentId)
    public function setStudentID($studentID) { // setter untuk mengubah nilai atribut
        $this->studentID = $studentID;
    }

    // Encapsulation (setter name)
    public function setName($name) {
        $this->name = $name;
    }
```

### 4. Abstraction
- Buat kelas abstrak Course dengan metode abstrak getCourseDetails().
```php
abstract class Course { // abstract: menyembunyikan detail implementasi internal dan hanya menampilkan fungsionalitas utama
    abstract public function getCourseDetails();
}
```

- Buat kelas OnlineCourse dan OfflineCourse yang mengimplementasikan getCourseDetails() untuk memberikan detail yang berbeda.
```php
class OnlineCourse extends Course {
    private $courseName;

    public function __construct($courseName) {
        $this->courseName = $courseName;
    }

    public function getCourseDetails() { // menggunakan metode yang sama pada class induk, tetapi dengan implementasi yang berbeda
        return "Online Course: ". $this->courseName; // Override method
    }
}

class OfflineCourse extends Course {
    private $courseName;

    public function __construct($courseName) {
        $this->courseName = $courseName;
    }

    public function getCourseDetails() { // menggunakan metode yang sama pada class induk, tetapi dengan implementasi yang berbeda
        return "Offline Course: " . $this->courseName; // Override method
    }
}
```

# Dokumentasi Tugas
### 1. Implementasikan kelas Person sebagai induk dari Dosen dan Mahasiswa.
```php
// Definisi Kelas
class Person {
    // Atribut atau properties
    protected $nama; // Protected: jenis atribut yang digunakan hanya untuk class itu sendiri dan class turunannya atau yang diwarisi
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
}
```

### 2. Gunakan konsep Inheritance untuk membuat hierarki kelas yang memungkinkan Dosen dan Mahasiswa memiliki atribut dan metode yang sesuai dengan perannya.
- Membuat class Mahasiswa dengan atribut nim dan metode tampilData.
```php
class Mahasiswa extends Person {
    // Atribut atau properties
    public $nim; 
    // Constructor menginisialisasi
    public function __construct($nama, $nim, $role) { //extends untuk tanda telah mewarisi atribut atau method atau function dari class Person
        parent::__construct($nama, $role); // Parent untuk menginisialisasi nilai atribut yang berada di class induk
        $this->nim = $nim;
    }

    // Metode
    public function tampilData() { // metode yang diwarisi
        return "Nama: $this->nama <br> Nim: $this->nim";
    }
}
```

- Membuat class Dosen dengan atribut nim dan metode tampilData.
```php
// Definisi Kelas
class Dosen extends Person {
    // Atribut atau properties
    public $nidn; 

    // Constructor
    public function __construct($nama, $nidn, $role) {
        parent::__construct($nama, $role);
        $this->nidn = $nidn;
    }

    // Metode
    public function tampilData() {
        return "Nama: $this->nama <br> NIDN: $this->nidn";
    }
}
```

### 3. Terapkan Polymorphism dengan membuat metode getRole() di kelas Person dan override metode ini di kelas Dosen dan Mahasiswa untuk menampilkan peran yang berbeda.
- Tambahkan metode getRole() pada kelas Person.
```php
public function getRole() {
        return $this->role;
    }
```

- Override metode tersebut ke dalam kelas Dosen dan Mahasiswa
```php
// polymorphism (override method getRole())
// Menambahkan method ini kedalam kelas Dosen dan Mahasiswa
    public function getRole() { // Override method: menggunakan metode yang sama pada class induk, tetapi dengan implementasi yang berbeda
        return "Role: $this->role";
    }
```

### 4. Gunakan Encapsulation untuk melindungi atribut nidn di kelas Dosen dan nim di kelas Mahasiswa.
- Ubah jenis atribut yang awalnya public menjadi private pada kelas Dosen
```php
private $nidn; // Atribut dengan tipe private hanya bisa digunakan didalam kelas itu sendiri.
```

- Ubah jenis atribut yang awalnya public menjadi private pada kelas Mahasiswa
```php
private $nim; // Atribut dengan tipe private hanya bisa digunakan didalam kelas itu sendiri.
```

### 5. Buat kelas abstrak Jurnal dan implementasikan konsep Abstraction dengan membuat kelas turunan JurnalDosen dan JurnalMahasiswa yang masing-masing memiliki cara tersendiri untuk mengelola pengajuan jurnal.
```php
// Definisi class
abstract class Jurnal { // Abstact menyembunyikan detail implementasi internal dan hanya menampilkan fungsionalitas utama
    // Atribut atau properties
    protected $title;
    protected $author;
    protected $status;

    // Constructor menginisialisasi nilai atribut
    public function __construct($title, $author, $status) {
        $this->title = $title;
        $this->author = $author;
        $this->status = $status;
    }

    // Metode
    abstract public function statusPengajuan();

    // metode get untuk mengakses nilai atribut
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
    // Metode yang diambil dari abstaction
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
```
Kelas abstract Jurnal mendefinisikan metode statusPengajuan() yang harus diimplementasikan oleh kelas turunan seperti JurnalDosen dan JurnalMahasiswa.

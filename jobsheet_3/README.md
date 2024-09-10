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

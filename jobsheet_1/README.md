# Jobsheet 1: Implementasi Prinsip OOP dalam PHP
## Tujuan
Melalui jobsheet ini, mahasiswa diharapkan mampu mengimplementasikan konsep dasar OOP dalam pemrograman PHP dengan membuat class, objek, serta menerapkan prinsip Encapsulation, Inheritance, Polymorphism, dan Abstraction.
## Instruksi

## 1. Membuat class dan object
## Class dan Object
###  Class
Class merupakan rancangan atau blueprint yang terdiri dari beberapa struktur dan perilaku mengenai object, yang dimana struktur tersebut berisi properti(atribut) dan tingkah laku atau metode(method) yang dimiliki.

Contoh class:
```sh
class Mahasiswa
```

### Object
Object merupakan instance dari class yang memiliki properti(atribut) dan metode(method), yang dapat digunakan untuk memanipulasi data atau untuk menjalankan sebuah fungsi.

Contoh object:
```sh
$mahasiswa = new mahasiswa;
```

- Membuat class Mahasiswa dengan atribut nama, nim, jurusan. 
```sh
// Definisi Class
class Mahasiswa {
    // Atribut atau properties
    // public berarti variabel atau atribut tersebut bisa diakses baik didalam class maupun diluar class
    public $nama;
    public $nim;
    public $jurusan;
    
    // Constructor untuk menginisialisasi object
    public function __construct($nama, $nim, $jurusan) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }
}
```

- Membuat metode tampilkanData() dalam class Mahasiswa.
```sh
// Metode atau function
public function tampilkanData() {
        // return digunakan untuk mengembalikan nilai dari properti(atribut)
        return "Nama: $this->nama, Nim: $this->nim, Jurusan: $this->jurusan";
    }
```

- Instansiasi objek dari class Mahasiswa dan tampilkan data mahasiswa tersebut.
```sh
// instansiasi objek
$mahasiswa1 = new Mahasiswa("Andi Prasetyo", "123456789", "Teknik Informatika");
// mengambil fungsi dari class Mahasiswa
echo $mahasiswa1->tampilkanData();
```

- Berikut ini adalah kode lengkapnya.
![alt text](https://github.com/ProboDwi/P.WEB2/blob/main/jobsheet_1/image/class%26object.png)
### Penjelasan:
- Class Mahasiswa: Class ini memiliki atribut nama, nim, jurusan, serta metode tampilkanData().
- Object: $mahasiswa1 adalah instance dari class Mahasiswa, dan data mahasiswa ditampilkan menggunakan metode tampilkanData().

- Ini adalah output dari kode tersebut.
![alt text](https://github.com/ProboDwi/P.WEB2/blob/main/jobsheet_1/image/output_class%26object.png)

## 2. Encapsulation
Encapsulation: Menyembunyikan detail implementasi dan hanya memberikan
akses melalui metode tertentu.
- Mengubah atribut dalam class Mahasiswa menjadi private.
```sh
class Mahasiswa {
    // private berarti variabel atau atribut tersebut hanya bisa diakses didalam class tersebut.
    private $nama;
    private $nim;
    private $jurusan;
}
```

- Membuat metode get dan set untuk atribut nama, nim, dan jurusan.
```sh
    // get digunakan untuk mengambil nilai properti(atribut)
    public function getNama() {
        // return digunakan untuk mengembalikan nilai dari properti(atribut)
        return $this->nama;
    }

    public function getNim() {
        return $this->nim;
    }

    public function getJurusan() {
        return $this->jurusan;
    }

    // set digunakan untuk menetapkan atau mengubah nilai properti(atribut)
    public function setNama($nama) {
        // untuk menetapkan nilai
        $this->nama = $nama;
    }

    public function setNim($nim) {
        $this->nim = $nim;
    }

    public function setJurusan($jurusan) {
        $this->jurusan = $jurusan;
    }
```

- Implementasi get dan set.
```sh
// Instansiasi Objek
$mahasiswa = new Mahasiswa("Andi Prasetyo", "123456789", "Teknik Informatika");
echo $mahasiswa->getNama();
echo "<br>";
echo $mahasiswa->getNim();
echo "<br>";
echo $mahasiswa->getJurusan();
```

- Contoh kode lengkap.
![alt text](https://github.com/ProboDwi/P.WEB2/blob/main/jobsheet_1/image/encapsulation.png)
### Penjelasan:
- 'Get' digunakan untuk mengambil nilai properti
- 'set' digunakan untuk menetapkan (atau mengubah) nilai properti.
- Cara menampilkan data dengan 'get' adalah dengan menjalankan atau mengambil fungsi get dari class tersebut.


- Output dari kode tersebut.
![alt text](https://github.com/ProboDwi/P.WEB2/blob/main/jobsheet_1/image/output_encapsulation.png)

## 3. Inheritance
Inheritance: Kelas dapat mewarisi properti dan metode dari kelas lain.
- Buat class Pengguna dengan atribut nama dan metode getNama().
```sh
class Pengguna {
    // protected hanya bisa digunakan untuk class induk dan turunannya
    protected $nama;
}
```

- Buat class Dosen yang mewarisi class Pengguna dan tambahkan atribut mataKuliah.
```sh
// extends digunakan agar bisa mengambil atribut dan method yang ada di class induk
class Dosen extends Pengguna {
    private $matakuliah;
}
```

- Instansiasi objek dari class Dosen dan tampilkan data dosen.
```sh
// instansiasi objek
$dosen = new Dosen("Andi Prasetyo", "Pemrograman PHP");
// mengambil fungsi atau method dari class pengguna
echo $dosen->getNama();
// mengambil fungsi atau method daru class dosen
echo "<br>";
echo $dosen->getMatakuliah();
```

- Contoh kode lengkap
![alt text](https://github.com/ProboDwi/P.WEB2/blob/main/jobsheet_1/image/inheritance.png)
### Penjelasan:
- protected: digunakan ketika ada kondisi dimana class tersebut akan diturunkan, protected hanya bisa digunakan oleh class induk dan class turunannya.
- extends: digunakan untuk mengambil atribut atau method yang ada pada class indukan.
- parent: untuk inisialisasi atribut yang diambil dari class induk.

- Output
![alt text](https://github.com/ProboDwi/P.WEB2/blob/main/jobsheet_1/image/output_inheritance.png)

## 4. Polymorphism
Polymorphism: Metode yang sama dapat memiliki implementasi berbeda dalam class yang berbeda.
- Buat class Pengguna dengan metode aksesFitur().
```sh
class Pengguna {
    public function aksesFitur() {
        echo "Akses fitur pengguna <br>";
    }
}
```

- Implementasikan aksesFitur() dengan cara berbeda di class Dosen dan Mahasiswa.
```sh
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
```

- Instansiasi objek dari class Dosen dan Mahasiswa, lalu panggil metode aksesFitur().
```sh
// instansiasi objek
$pengguna = new Pengguna();
// mengambil method dari class Pengguna
$pengguna->aksesFitur();

// instansiasi objek
$dosen = new Dosen();
// menetapkan nilai atribut
$dosen->setNama("Pak Abdau");
// mengambil method dari class Dosen
$dosen->aksesFitur();

// instansiasi objek
$mahasiswa = new Mahasiswa();
// menetapkan nilai atribut
$mahasiswa->setNama("Alva");
// mengambil method dari class Mahasiswa
$mahasiswa->aksesFitur();
```

- Contoh kode lengkap
![alt text](https://github.com/ProboDwi/P.WEB2/blob/main/jobsheet_1/image/polymorphism.png)

- Output
![alt text](https://github.com/ProboDwi/P.WEB2/blob/main/jobsheet_1/image/output_polymorphism.png)

## 5. Abstraction
Abstraction: Menyembunyikan detail implementasi dan hanya menampilkan fungsi penting.
- Buat class abstrak Pengguna dengan metode abstrak aksesFitur().
```sh
// hanya perlu menambahkan kode "abstract" di depan agar bisa menggunakan prinsip abstraction
abstract class Pengguna {
    //atribut class pengguna
    protected $nama, $nim, $nip;
    // method dengan abstract
    abstract public function aksesFitur();
}
```

- Implementasikan class Mahasiswa dan Dosen yang mengimplementasikan metode abstrak tersebut.
```sh
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
```

- Demonstrasikan dengan memanggil metode aksesFitur() dari objek yang diinstansiasi.
```sh
// instansiasi objek
$dosen = new Dosen();
// menetapkan nilai atribut
$dosen->setNama("Pak Abdau");
// mengambil method dari class Dosen
$dosen->aksesFitur();

// instansiasi objek
$mahasiswa = new Mahasiswa();
// menetapkan nilai atribut
$mahasiswa->setNama("Alva");
// mengambil method dari class Dosen
$mahasiswa->aksesFitur();
```

- Contoh kode lengkap
![alt text](https://github.com/ProboDwi/P.WEB2/blob/main/jobsheet_1/image/abstract.png)
- Output
![alt text](https://github.com/ProboDwi/P.WEB2/blob/main/jobsheet_1/image/output_abstact.png)

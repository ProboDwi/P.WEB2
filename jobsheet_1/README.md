# JOBSHEET 1
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

## 1. Membuat class dan object
- Membuat class Mahasiswa dengan atribut nama, nim, jurusan. 
```sh
// Definisi Class
class Mahasiswa {
    // Atribut atau properties
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
        return "Nama: $this->nama, Nim: $this->nim, Jurusan: $this->jurusan";
    }
```
- Instansiasi objek dari class Mahasiswa dan tampilkan data mahasiswa tersebut.
```sh
// instansiasi objek
$mahasiswa1 = new Mahasiswa("Andi Prasetyo", "123456789", "Teknik Informatika");
echo $mahasiswa1->tampilkanData();
```

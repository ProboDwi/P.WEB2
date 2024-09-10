# Jobsheet 2: Menggunakan Konsep Kelas dan Objek dalam PHP
# Tujuan
Dengan jobsheet ini, mahasiswa diharapkan mampu menerapkan konsep kelas dan objek dalam PHP melalui serangkaian tugas yang menekankan pada pembuatan dan penggunaan kelas serta objek.

# Instruksi
### 1. Membuat Class dan Object
- Buat class Mahasiswa yang memiliki atribut nama, nim, dan jurusan.
```php
// definisi class
class Mahasiswa {
    // atribut atau properti
    public $nama;
    public $nim;
    public $jurusan;
}
```
class Mahasiswa memiliki atribut nama,nim,kelas dengan tipe atribut "public" agar atribut tersebut bisa diakses baik didalam calss maupun diluar class.

- Buat metode tampilkanData() dalam class Mahasiswa.
```php
// function untuk menampilkan data
public function tampilkanData() {
    return "Mahasiswa: $this->nama, Nim: $this->nim, Jurusan: $this->jurusan";
}
```
return digunakan untuk mengembalikan nilai.

- Instansiasi objek dari class Mahasiswa dan tampilkan data mahasiswa.
```php
// instansiasi objek
$mahasiswa = new Mahasiswa("Probo", "12345", "TI");
// mengambil fungsi dari class Mahasiswa
echo $mahasiswa->tampilkanData();
```
instansiasi objek dilakukan dengan membuat variabel baru untuk menampung data, kemudian kode "new Mahasiswa" untuk menggunakan class.

## 2. Implementasi Constructor
constructor digunakan untuk menginisialisasi atribut dari objek
- Tambahkan constructor pada kelas Mahasiswa yang akan menginisialisasi atribut nama, nim, dan jurusan.
```php
// constructor untuk menginisialisasi nilai atribut
    public function __construct($nama, $nim, $jurusan) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }
```
constructor digunakan untuk menginisialisasi nilai atribut dari objek

## 3. Membuat Metode Tambahan
- Buat metode updateJurusan() dalam kelas Mahasiswa yang memungkinkan perubahan jurusan.
```php
// method atau function untuk mengubah jurusan
    public function updateJurusan($jurusan) {
        // mengganti variabel dari atribut jurusan ke variabel paramater
        $this->jurusan = $jurusan;
    }
```

- Gunakan metode ini untuk mengubah jurusan dari objek yang sudah dibuat.
```php
// instansiasi objek
$mahasiswa = new Mahasiswa("Probo", "12345", "TI");
// update jurusan
$mahasiswa->updateJurusan("TE");
```
saat dijalankan pada browser yang tadinya jurusan "TI" akan di update dengan jurusab "TE".

## 4. Penggunaan Atribut dan Metode
- Ubah nilai atribut nim dari objek Mahasiswa menggunakan metode setter.
  buat metode get dan set terlebih dahulu
```php
// untuk mengambil nilai atribut
    public function getNim(){
        return $this->nim;
    }

// untuk mengubah atau menetapkan nilai atribut
    public function setNim($nim) {
        $this->nim = $nim;
    }
```
    Instansiasi objek
```php
// mengubah nilai atribut dengan metode set
$mahasiswa->setNim("54321");
```

- Tampilkan data mahasiswa yang sudah diperbarui dengan memanggil metode tampilkanData().
```php
// menampilkan data yang diambil dari metode class Mahasiswa
echo $mahasiswa->tampilkanData();
```

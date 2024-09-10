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

- Kode Lengkap dari program diatas
![alt text](https://github.com/ProboDwi/P.WEB2/blob/main/jobsheet_2/img_Jobsheet2/class%26object.png)

- Output </br>
![alt text](https://github.com/ProboDwi/P.WEB2/blob/main/jobsheet_2/img_Jobsheet2/output1.png)</br>
pada tampilan output belum ada nilainya karena atribut tersebut belum diinisialisasi dengan construct.

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

- Kode lengkap
![alt text](https://github.com/ProboDwi/P.WEB2/blob/main/jobsheet_2/img_Jobsheet2/constructor.png)

- Output </br>
![alt text](https://github.com/ProboDwi/P.WEB2/blob/main/jobsheet_2/img_Jobsheet2/output2.png)</br>
Setelah diinisialisasi dengan constructor maka nilai dari atribut akan keluar.

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

- Kode lengkap
![alt text](https://github.com/ProboDwi/P.WEB2/blob/main/jobsheet_2/img_Jobsheet2/metode.png)

- Output </br>
![alt text](https://github.com/ProboDwi/P.WEB2/blob/main/jobsheet_2/img_Jobsheet2/output3.png) </br>
saat dijalankan pada browser yang tadinya jurusan "TI" akan di update dengan jurusab "TE".

## 4. Penggunaan Atribut dan Metode
- Ubah nilai atribut nim dari objek Mahasiswa menggunakan metode setter.
  buat metode get dan set terlebih dahulu
```php
// untuk mengakses nilai atribut
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

- Kode lengkap
![alt text](https://github.com/ProboDwi/P.WEB2/blob/main/jobsheet_2/img_Jobsheet2/atribut%26method.png)

- Output </br>
![alt text](https://github.com/ProboDwi/P.WEB2/blob/main/jobsheet_2/img_Jobsheet2/output4.png) </br>
metode set dan get digunakan untuk mengambil nilai dari atribut, kemudian nilai tersebut diubah atau ditetapkan dengan metode set.

# Penjelasn kode-kode dari Tugas Jobsheet 2
### 1. Implementasikan kelas Dosen dengan atribut nama, nip, dan mataKuliah.
```php
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
}
```
Membuat clas Dosen dengan atribut nama, nip, dan matakuliah dengan jenis atribut "public" agar bisa dakses dimana saja. Buat metode construct untuk meningisialisasi nilai atribut dari objek.

### 2. Buat metode tampilkanDosen() untuk menampilkan informasi dosen.
```php
    // Metode atau Function untuk menampilkan data
    public function tampilkanDosen() {
        return "Nama Dosen: $this->nama, NIP: $this->nip, Matakuliah: $this->matakuliah";
    }
```
Metode tampilkanDosen() untuk menampilkan data yang dikirim oleh objek dengan kode "return" untuk mengembalikan nilai, kemudian "$this->nama" untuk mengambil nilai dari atribut $nama.

### 3. Buat objek dari kelas Dosen, dan gunakan metode tampilkanDosen() untuk menampilkan informasi tersebut.
```php
// instansiasi objek
$dosen = new Dosen("Wahyudi", "123456", "OOP");
// untuk menampilkan data yang mengambil fungsi dari class Dosen
echo $dosen->tampilkanDosen();
```

- Berikut ini adalah kode lengkapnya.
![alt text](https://github.com/ProboDwi/P.WEB2/blob/main/jobsheet_2/img_Jobsheet2/tugas.png)

- Output </br>
![alt text](https://github.com/ProboDwi/P.WEB2/blob/main/jobsheet_2/img_Jobsheet2/tugas_output.png)

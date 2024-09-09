<?php
// Definisi Class
class Buku
{
    // Atribut atau properties  
    private $judul;
    private $penulis;

    // Constructor
    public function __construct($judul, $penulis)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
    }

    // Metode atau Function
    public function getJudul()
    {
        return $this->judul;
    }
    public function setJudul($judul)
    {
        $this->judul = $judul;
    }
}

// Instansiasi Objek
$buku1 = new Buku("Pemrograman PHP", "Andi Prasetyo");
echo $buku1->getJudul(); // Output: Pemrograman PHP
?>
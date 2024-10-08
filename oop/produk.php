<?php
//Jualan Produk
// Komik
// Game
class Produk
{
  public $judul = "Judul", 
        $penulis = "Penulis", 
        $penerbit = "Penerbit", 
        $harga = 0; 

  public function getLabel()
  {
    return "$this->penulis, $this->penerbit";
  }
}

// $produk1 = new Produk();
// $produk1->judul = "Naruto";

// $produk2 = new Produk();
// $produk2->judul = "Uncharted";

$produk3 = new Produk();
$produk3->judul = "Penjelajahan Riung Bandung";
$produk3->penulis = "Daffa";
$produk3->penerbit = "Tomang";
$produk3->harga = 200000;

$produk4 = new Produk();
$produk4->judul = "Mozra";
$produk4->penulis = "Uloh";
$produk4->penerbit = "Amidis";
$produk4->harga = 300000;

echo "Komik : " . $produk3->getLabel();
echo "<br>";
echo "Game : " . $produk4->getLabel();

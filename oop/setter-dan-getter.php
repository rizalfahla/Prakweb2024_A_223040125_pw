<?php
// Jualan Produk
// Komik
// Game

class Produk
{
  private $judul, $penulis, $penerbit, $harga;
  
  protected $diskon = 0;

  public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0)
  {
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
  }

  public function setJudul ($judul) {
    $this -> judul = $judul;
  }

  public function getJudul(){
    return $this->judul;
  }

  public function setPenulis ($penulis){
    $this->penulis = $penulis;
  }

  public function getPenulis (){
    return $this->penulis;
  }

  public function setPenerbit ($penerbit){
    $this->penerbit = $penerbit;
  }

  public function getPenerbit (){
    return $this->penerbit;
  }

  public function setHarga ($harga){
    $this->harga = $harga;
  }


  public function getHarga()
  {
    return $this->harga - ($this->harga * $this->diskon / 100);
  }

  public function getLabel()
  {
    return "$this->penulis, $this->penerbit";
  }

  public function getInfoProduk()
  {
    $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->getHarga()})";
    return $str;
  }
}

class Komik extends Produk
{
  public $jmlHalaman;

  public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0, $jmlHalaman = 0)
  {
    parent::__construct($judul, $penulis, $penerbit, $harga);
    $this->jmlHalaman = $jmlHalaman;
  }

  public function getInfoProduk()
  {
    $str = "Komik : " . parent::getInfoProduk() . " - {$this->jmlHalaman} Halaman.";
    return $str;
  }
}

class Game extends Produk
{
  public $waktuMain;

  public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0, $waktuMain = 0)
  {
    parent::__construct($judul, $penulis, $penerbit, $harga);
    $this->waktuMain = $waktuMain;
  }

  public function setDiskon($diskon)
  {
    $this->diskon = $diskon;
  }

  public function getDiskon(){
    return $this->diskon;
  }

  public function getInfoProduk()
  {
    $str = "Game : " . parent::getInfoProduk() . " - {$this->waktuMain} Jam.";
    return $str;
  }
}

class CetakInfoProduk
{
  public function cetak(Produk $produk)
  {
    $str = "{$produk->getJudul()} | {$produk->getLabel()} (Rp. {$produk->getHarga()})";
    return $str;
  }
}


$produk3 = new Komik("Penjelajahan Riung Bandung", "Daffa", "Tomang", 200000, 100);
$produk4 = new Game("Mozra", "Uloh", "Amidis", 300000, 50);

echo $produk3->getInfoProduk();
echo "<br>";
echo $produk4->getInfoProduk();


echo "<hr>";

$produk4->setDiskon(50);
echo $produk4->getHarga();
echo "<hr>";

echo $produk3->getJudul();
<?php 

require_once 'App/init.php';

/* $produk3 = new Komik("Penjelajahan Riung Bandung", "Daffa", "Tomang", 200000, 100);
$produk4 = new Game("Mozra", "Uloh", "Amidis", 300000, 50);


$cetakProduk = new CetakInfoProduk();
$cetakProduk -> tambahProduk( $produk3);
$cetakProduk -> tambahProduk( $produk4);
echo $cetakProduk-> cetak(); */

use App\Services\User as ServicesUser;
use App\Produk\User as ProdukUser;

new ServicesUser();
echo "<br>";
new ProdukUser();
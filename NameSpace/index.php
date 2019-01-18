<?php 

require_once 'App/init.php';

// $produk1 = new Novel("Dilan", "Pidi Baiq", "Dar mizan", 50000, 50,0,20);
// $produk2 = new film("Danur", "Risa Saraswati", "Bukune", 40000, 50);


// $cetakProduk = new CetakInfoProduk();
// $cetakProduk->tambahProduk($produk1);
// $cetakProduk->tambahProduk($produk2);
// echo $cetakProduk->cetak();
 
//  echo "<hr>";
//  new Coba();

use App\Service\User as ServiceUser;
use App\Produk\User as ProdukUser;

new ServiceUser();
echo "<br>";
new ProdukUser();
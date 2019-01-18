<?php 

class Produk {
	public $judul = "judul", 
		   $penulis = "penulis",
		   $penerbit = "penerbit",
		   $harga =0;

	public function getLabel() {
		return "$this->penulis, $this->penerbit";
	}

}

// $produk1 = new Produk();
// $produk1->judul = "Dilan";
// var_dump($produk1);

// $produk2 = new Produk();
// $produk2->judul = "Danur";
// $produk2->tambahProperty = "tahun terbit";
// var_dump($produk2);

$produk3 = new Produk();
$produk3->judul = "Dilan";
$produk3->penulis = "Pidi baiq";
$produk3->penerbit = "Dar mizan";
$produk3->harga = 50000;

$produk4 = new Produk();
$produk4->judul = "Danur";
$produk4->penulis = "Risa Saraswati";
$produk4->penerbit = "Bukune";
$produk4->harga = 40000;

echo "Novel : " . $produk3->getLabel();
echo "<br>";
echo "Film : " . $produk4->getLabel();
<?php 

class Produk {
	public $judul, 
		   $penulis,
		   $penerbit,
		   $harga,
		   $jmlHalaman,
		   $waktumain;

    public function __construct($judul = "judul", $penulis= "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktumain = 0 ) {
    	$this->judul = $judul;
    	$this->penulis = $penulis;
    	$this->penerbit = $penerbit;
    	$this->harga = $harga;
    	$this->jmlHalaman = $jmlHalaman;
    	$this->waktumain = $waktumain;

    }

	public function getLabel() {
		return "$this->penulis, $this->penerbit";
	}

	public function getInfoProduk() {
		$str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

		return $str;

	}

}

class Novel extends Produk {
	public  function getInfoProduk() {
		$str = "Novel : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) -{$this->jmlHalaman} Halaman.";
		return $str;
	}
}

class film extends Produk {
	public function getInfoProduk() {
		$str = "film : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) -{$this->waktumain} jam.";
		return $str;
	}
}

class CetakInfoProduk {
	public function cetak ( Produk $produk ) {
		$str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
		return $str;
	}
}


$produk1 = new Novel("Dilan", "Pidi Baiq", "Dar mizan", 50000,200,0, "Novel");
$produk2 = new film("Danur", "Risa Saraswati", "Bukune", 40000,0,2, "film");


echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();


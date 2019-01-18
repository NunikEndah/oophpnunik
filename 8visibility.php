<?php 

class Produk {
	public $judul, 
		   $penulis,
		   $penerbit;

	protected $diskon = 0;

	private $harga;
		  

    public function __construct($judul = "judul", $penulis= "penulis", $penerbit = "penerbit", $harga = 0 ) {
    	$this->judul = $judul;
    	$this->penulis = $penulis;
    	$this->penerbit = $penerbit;
    	$this->harga = $harga;
    	

    }

    public function getHarga() {
    	return $this->harga - ( $this->harga * $this->diskon / 100);
    }

	public function getLabel() {
		return "$this->penulis, $this->penerbit";
	}

	public function getInfoProduk() {
		$str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

		return $str;

	}

}

class Novel extends Produk {
	public $jmlHalaman;

	public function __construct($judul = "judul", $penulis= "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0 ) {

		parent::__construct($judul, $penulis, $penerbit , $harga);

		$this->jmlHalaman = $jmlHalaman;

	}

	public  function getInfoProduk() {
		$str = "Novel : " . parent::getInfoProduk() . " -{$this->jmlHalaman} Halaman.";
		return $str;
	}
}

class film extends Produk {
	public $waktumain;

	public function __construct($judul = "judul", $penulis= "penulis", $penerbit = "penerbit", $harga = 0, $waktumain = 0) {
		parent::__construct($judul, $penulis , $penerbit , $harga );

		$this->waktumain = $waktumain;	
	}

	public function setDiskon( $diskon) {
		$this->diskon = $diskon;
	}

	public function getInfoProduk() {
		$str = "film : " . parent::getInfoProduk() . " -{$this->waktumain} jam.";
		return $str;
	}
}

class CetakInfoProduk {
	public function cetak ( Produk $produk ) {
		$str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
		return $str;
	}
}


$produk1 = new Novel("Dilan", "Pidi Baiq", "Dar mizan", 50000, 50,0,20);
$produk2 = new film("Danur", "Risa Saraswati", "Bukune", 40000, 50);


echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<hr>";

$produk2->setDiskon(50);
echo $produk2->getHarga();


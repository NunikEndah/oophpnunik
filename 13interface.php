<?php 

interface InfoProduk {
	public function getInfoProduk();
}

abstract class Produk {
	protected $judul, 
		   $penulis,
		   $penerbit,
		   $harga,
		   $diskon = 0;
		  
    public function __construct($judul = "judul", $penulis= "penulis", $penerbit = "penerbit", $harga = 0 ) {
    	$this->judul = $judul;
    	$this->penulis = $penulis;
    	$this->penerbit = $penerbit;
    	$this->harga = $harga;
    }

    public function setJudul( $judul) {
    	$this->judul = $judul;
    }

    public function getJudul() {
    	return $this-> judul;
    }

    public function setPenulis( $penulis) {
		$this->penulis = $penulis;
	}

	public function getPenulis() {
		return $this->penulis;
	}

	public function setPenerbit( $penerbit) {
		$this->penerbit = $penerbit;
	}

	public function getPenerbit() {
		return $this->penerbit;
	}

	public function setDiskon( $diskon) {
		$this->diskon = $diskon;
	}

	public function getDiskon() {
		return $this->diskon;
	}

	public function setHarga() {
		return $this->$harga;
	}
 
    public function getHarga() {
    	return $this->harga - ( $this->harga * $this->diskon / 100);
    }

	public function getLabel() {
		return "$this->penulis, $this->penerbit";
	}

	abstract public function getInfo();

}

class Novel extends Produk implements InfoProduk{

	public $jmlHalaman;

	public function __construct($judul = "judul", $penulis= "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0 ) {

		parent::__construct($judul, $penulis, $penerbit , $harga);

		$this->jmlHalaman = $jmlHalaman;

	}

	public function getInfo() {
		$str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

		return $str;
	}

	public  function getInfoProduk() {
		$str = "Novel : " . $this->getInfo() . " ~ {$this->jmlHalaman} Halaman.";
		return $str;
	}
}

class film extends Produk implements InfoProduk  {
	public $waktumain;

	public function __construct($judul = "judul", $penulis= "penulis", $penerbit = "penerbit", $harga = 0, $waktumain = 0) {
		parent::__construct($judul, $penulis , $penerbit , $harga );

		$this->waktumain = $waktumain;	
	}

	public function setDiskon( $diskon) {
		$this->diskon = $diskon;
	}

	public function getInfo() {
		$str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

		return $str;
	}

	public  function getInfoProduk() {
		$str = "film : " . $this->getInfo() . " ~ {$this->waktumain} Jam.";
		return $str;
	}
}
class CetakInfoProduk {
	public $daftarProduk = array();

	public function tambahProduk(Produk $produk) {
		$this->daftarProduk[] = $produk;
	}

	public function cetak( ) {
		$str = "DAFTAR PRODUK : <br>";

		foreach($this->daftarProduk as $p) {
			$str .= "- {$p->getInfoProduk()} <br>";
		}
		return $str;
	}
}

$produk1 = new Novel("Dilan", "Pidi Baiq", "Dar mizan", 50000, 50,0,20);
$produk2 = new film("Danur", "Risa Saraswati", "Bukune", 40000, 50);


$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);
echo $cetakProduk->cetak();

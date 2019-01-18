<?php 

class Produk {
	public $judul, 
		   $penulis,
		   $penerbit,
		   $harga,
		   $jmlHalaman,
		   $waktumain,
		   $tipe;

    public function __construct($judul = "judul", $penulis= "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktumain = 0, $tipe ) {
    	$this->judul = $judul;
    	$this->penulis = $penulis;
    	$this->penerbit = $penerbit;
    	$this->harga = $harga;
    	$this->jmlHalaman = $jmlHalaman;
    	$this->waktumain = $waktumain;
    	$this->tipe = $tipe;

    }

	public function getLabel() {
		return "$this->penulis, $this->penerbit";
	}

	public function getInfoLengkap() {
		// Novel : Dilan | Pidi Baiq, Dar mizan (Rp.50000) - 200 Halaman.
		$str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
		if($this->tipe == "Novel"){
			$str .= " - {$this->jmlHalaman} Halaman.";
		} else if ( $this->tipe == "film" ) {
			$str .= " ~ {$this->waktumain} jam.";
		}

		return $str;

	}

}

class CetakInfoProduk {
	public function cetak ( Produk $produk ) {
		$str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
		return $str;
	}
}


$produk1 = new Produk("Dilan", "Pidi Baiq", "Dar mizan", 50000,200,0, "Novel");
$produk2 = new Produk("Danur", "Risa Saraswati", "Bukune", 40000,0,2, "film");

echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();


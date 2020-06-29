<?php 
//jualan produk
//komik
//game
/**
 * 
 */
class Produk {
	public 
	$judul ,
	$penulis ,
	$penerbit,
	$harga,
	$jmlHalaman,
	$jmlJam,
	$tipe ;

	  public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman, $jmlJam, $tipe){
	  	$this->judul = $judul;
	  	$this->penulis = $penulis;
	  	$this->penerbit = $penerbit;
	  	$this->harga = $harga;
	  	$this->jmlHalaman = $jmlHalaman;
	  	$this->jmlJam = $jmlJam;
	  	$this->tipe = $tipe;
	  }


	  public function getLabel(){
	  	return "$this->penulis, $this->penerbit";
	  }

	  public function getInfoLengkap(){
	  	$str = "{$this->tipe} : {$this->judul} | {$this->getLabel()}(Rp. {$this->harga})";
	  	if ($this->tipe == "Komik") {
	  		$str .= " - {$this->jmlHalaman} Halaman";
	  	}elseif ($this->tipe == "Game") {
	  		$str .= " ~ {$this->jmlJam} Jam";
	  	}
	  	return $str;

	  }
}

/**
 * 
 */
class CetakInfoProduk {
	
	public function cetak(Produk $produk){
		$str = "{$produk-> judul} | {$produk->getLabel()} (Rp.{$produk->harga})";
		return $str;
	}


}

$produk1 = new Produk("naruto", "Masashi", "Shoen", 3000, 100, 0, "Komik");

$produk2 = new Produk("uncharted", "paidi", "sony", 250000, 0, 50, "Game");

echo $produk1-> getInfoLengkap();
echo "<br>";
echo $produk2-> getInfoLengkap();




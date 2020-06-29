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
	$jmlJam;

	  public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman, $jmlJam){
	  	$this->judul = $judul;
	  	$this->penulis = $penulis;
	  	$this->penerbit = $penerbit;
	  	$this->harga = $harga;
	  	$this->jmlHalaman = $jmlHalaman;
	  	$this->jmlJam = $jmlJam;
	  }


	  public function getLabel(){
	  	return "$this->penulis, $this->penerbit";
	  }

	  public function getInfoProduk(){
	  	$str = "{$this->tipe} : {$this->judul} | {$this->getLabel()}(Rp. {$this->harga})";
	  	return $str;
	  }
}

/**
 * 
 */
class Komik extends Produk{
	
	public function getInfoProduk(){
		$str = "Komik : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->jmlHalaman} Halaman.";
		return $str;
	}
}

/**
 * 
 */
class Game extends Produk{
	
	public function getInfoProduk()
	{
		$str = "Game : {$this->judul} | {$this->getLabel()}(Rp. {$this->harga}) ~ {$this->jmlJam} Jam.";
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

$produk1 = new Komik("naruto", "Masashi", "Shoen", 3000, 100,0);

$produk2 = new Game("uncharted", "paidi", "sony", 250000,0,  50);

echo $produk1-> getInfoProduk();
echo "<br>";
echo $produk2-> getInfoProduk();




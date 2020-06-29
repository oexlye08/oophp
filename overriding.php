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
	$harga;

	  public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0){
	  	$this->judul = $judul;
	  	$this->penulis = $penulis;
	  	$this->penerbit = $penerbit;
	  	$this->harga = $harga;
	  }


	  public function getLabel(){
	  	return "$this->penulis, $this->penerbit";
	  }

	  public function getInfoProduk(){
	  	$str = "{$this->judul} | {$this->getLabel()}(Rp. {$this->harga})";
	  	return $str;
	  }
}

/**
 * 
 */
class Komik extends Produk{
    public $jmlHalaman;
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0){
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jmlHalaman = $jmlHalaman;
    }
	
	public function getInfoProduk(){
		$str = "Komik : " .  parent::getInfoProduk()  . " - {$this->jmlHalaman} Halaman.";
		return $str;
	}
}

/**
 * 
 */
class Game extends Produk{
    public $jmlJam;
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlJam = 0){
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jmlJam = $jmlJam;
    }
	
	public function getInfoProduk()
	{
		$str = "Game : " . parent::getInfoProduk() . " ~ {$this->jmlJam} Jam.";
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




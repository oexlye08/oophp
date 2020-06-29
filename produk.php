<?php 
//jualan produk
//komik
//game
/**
 * 
 */
class Produk {
	public $judul = "judul",
	 $penulis = "penulis",
	 $penerbit = "penerbit",
	  $harga = 0;


	  public function getLabel(){
	  	return "$this->penulis, $this->penerbit";
	  }
}
	

// $produk1 = new Produk();

// $produk1-> judul = "naruto";

// var_dump($produk1);

// $produk2 = new Produk();
// $produk2 -> judul= "ancarted"; 
// $produk2 -> judul = "hahah";

// var_dump($produk2);

$produk3 = new Produk();
$produk3 -> judul = "naruto";
$produk3 -> penulis = "Masashi Kishimoto";
$produk3 -> penerbit = "Shoen Jump";
$produk3 -> harga = 30000;

// echo "Komik : $produk3->penulis, $produk3->penerbit";
// echo "<br>";
// echo $produk3->getLabel();

echo "<hr>";
$produk4 = new Produk();
$produk4-> judul = "Uncharted";
$produk4-> penulis = "Neil Druckman";
$produk4-> penerbit = "Spny Computer";
$produk4-> harga = "250000";

echo "Komik :" .  $produk3->getLabel();
echo "<br>";
echo "Game : " .  $produk4->getLabel();

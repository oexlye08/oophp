<?php

require_once "App/init.php";

// $produk1 = new Komik("naruto", "Masashi", "Shoen", 3000, 100,0);

// $produk2 = new Game("uncharted", "paidi", "sony", 250000,0,  50);

// $cetakProduk = new CetakInfoProduk();
// $cetakProduk->tambahProduk($produk1);
// $cetakProduk->tambahProduk($produk2);
// echo $cetakProduk->cetak();

// new User();

use App\Produk\User as ProdukUser;
use App\Services\User as ServicesUser;

new ProdukUser();
echo "<br>";
new ServicesUser();
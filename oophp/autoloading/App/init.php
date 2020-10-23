<?php 
/*requie_once 'App/Produk/InfoProduk.php';
requie_once 'App/Produk/Produk.php';
requie_once 'App/Produk/Komik.php';
requie_once 'App/Produk/Game.php';
requie_once 'App/Produk/CetakInfoProduk.php'; */


spl_autoload_register(function($class){
	require_once __DIR__ . '/Produk/' . $class . '.php';	
});
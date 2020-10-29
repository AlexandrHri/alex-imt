<?php 
session_start();
//if ( isset($_POST['product']) && !empty($_POST['product']) ) {

$product=$_POST['product'];
$count=$_POST['count'];//}



$products = [

2=>['name'=>'товар 1', 'price'=>233, 'id'=>0],

7=>['name'=>'товар 2', 'price'=>333, 'id'=>1],

43=>['name'=>'товар 3', 'price'=>332, 'id'=>2],];


$cart =
['sum'=>50,'items'=>[]];


function dobavlenie ($a,$y){
	//$cart[items][$a] = ['id'=>10,'quantity'=>10,'price'=>10];

	$cart [items][$a][id]=100;
	$cart [items][$a][quantity]=$y;
	$cart [items][$a][price]=10;
	$sum=$cart[items][$a][quantity]*$cart[items][$a][price];
	$cart [sum]=$cart[sum]+$sum;
		return $cart;
}

function update1($y){
	$cart [items][$y][id]=100;
	$cart [items][$y][quantity]=$y;
	$cart [items][$y][price]=10;
	$cart [sum]=$cart [sum]+($cart[items][$y][quantity]*$cart[items][$y][price]);
	return $cart;}

	function delite ($z){
	unset($cart [items][$z]);	
	return$cart[items][$z];	}


	//$cart=dobavlenie($product,$count);

//include "list.php"


 ?>

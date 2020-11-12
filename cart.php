<?php
session_start();
if (isset($_SESSION['cart'])) 
	$_SESSION['cart'];

$_SESSION['cart'] =
['sum'=>0,'tovar'=>[]];


function dobavlenie ($a,$y,$c){
	//$cart[items][$a] = ['id'=>10,'quantity'=>10,'price'=>10];

$_SESSION['cart']['tovar'][$a]['id']=$a;
$_SESSION['cart']['tovar'][$a]['quantity']=$y;
$_SESSION['cart']['tovar'][$a]['price']=$c;
$sum=$_SESSION['cart']['tovar'][$a]['quantity']*$_SESSION['cart']['tovar'][$a]['price'];
$_SESSION['cart']['sum']=$_SESSION['cart']['sum']+$sum;
		return $_SESSION['cart'];
}

//function update1($y){
//	$cart ['tovar'][$y]['id']=100;
//	$cart ['tovar'][$y]['quantity']=$y;
//	$cart ['tovar'][$y]['price']=10;
//	$cart ['sum']=$cart ['sum']+($cart['tovar'][$y]['quantity']*$cart['tovar'][$y]['price']);
//	return $cart;}

	function delite ($z){
	unset($_SESSION['cart']['tovar'][$z]);
	return $_SESSION['cart']['tovar'][$z];
}


	//$cart=dobavlenie($product,$count);

//include "list.php"
  ?>
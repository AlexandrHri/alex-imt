<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
$cart =
['sum'=>50,'items'=>[]];


function dobavlenie ($a){
	//$cart[items][$a] = ['id'=>10,'quantity'=>10,'price'=>10];

	$cart [items][$a][id]=100;
	$cart [items][$a][quantity]=100;
	$cart [items][$a][price]=10;
	$sum=$cart[items][$a][quantity]*$cart[items][$a][price];
	$cart [sum]=$cart[sum]+$sum;
		return $cart;
}

$cart=dobavlenie($a);


function update1($y){
	$cart [items][$y][id]=100;
	$cart [items][$y][quantity]=$y;
	$cart [items][$y][price]=10;
	$cart [sum]=$cart [sum]+($cart[items][$y][quantity]*$cart[items][$y][price]);
	return $cart;}

	function delite ($z){
	unset($cart [items][$z]);	
	return$cart[items][$z];	}
 $a=0;   
$cart=dobavlenie ($a);
$z=1;
//    $cart=delite ($z);
$y=5;
//$cart=update1($y);
//var_dump($cart);

$a=1;
$cart=dobavlenie ($a);
var_dump($cart);

  ?>	


</body>
</html>
<?php 
session_start();
$_SESSION['cart']=[];

$products = [

1=>['name'=>'товар 1', 'price'=>233],

2=>['name'=>'товар 2', 'price'=>333],

3=>['name'=>'товар 3', 'price'=>332],];

include "cart.php";
?>


<html>
<head>
	<title></title>
</head>
<body>


<form>

<select name="product">
<option value='0' >Выбрать товар</option>
<?php foreach($products as $key => $product) {?>
<option value="<?php echo $key?>" ><?php  echo $product['name']?> </option>
<?php }?>
</select>

<p>Количество: <input type="text" name="count" /></p>
<p><input type="submit" value="Отправить"></p>

<?php 

$product=$_GET['product'];
$count=$_GET['count'];
$price=$products[$product]['price'];

$_SESSION['cart']=dobavlenie($product,$count,$price);

 //var_dump($_SESSION['cart']);
 ?>

<a href="/list.php">card</a>
<?php 
if (isset($product)) {?>

<h1>Ваш заказ</h1>
<h2>Вы заказали продукт 
	<?php
	 echo $products[$product]['name']?></h2>
	<p>Кол-во <?php echo $_SESSION['cart']['tovar'][$product]['quantity']?></p>
	<p>	Цена <?php echo $_SESSION['cart']['tovar'][$product]['price']?></p>
	<a href="/add.php?id=<?php echo $_SESSION['cart']['tovar'][$product]['id']?>">удалить</a>
	<?php $id=$_GET['id']; 
	if (isset($id)){ 
		$_SESSION['cart']['tovar'][$product]=delite($id);
		var_dump($_SESSION['cart']);
	}

	

	?>


	<h2>Итого к оплате: <?php echo $_SESSION['cart']['sum']?> </h2>

<?php } var_dump($_SESSION['cart']) ?>







<!--<?php //var_dump($products); <a href="cart.php?product=<?php echo $product['id']?>">В корзину</a>?>
<?php //var_dump($cart); ?>-->

</form>
</body>
</html>


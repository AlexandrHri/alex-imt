<?php 
session_start();

$_POST['product']=$product;
$_POST['count']=$count;


include "cart.php";?>


<html>
<head>
	<title></title>
</head>
<body>
<?php foreach($products as $key => $product) ?>

<form action="" method='POST'  enctype="multipart/form-data" >

<select name="product">
<option value='0' >Выберите товар</option>
<option value="$product['id']" ><?php  echo $product['name']?> </option>

</select>

<p>Количество: <input type="text" name="count" /></p>
<p><input type="submit" value="Отправить"></p>

<?php  $cart=dobavlenie($product,$count);?>






<?php //var_dump($products); <a href="cart.php?product=<?php echo $product['id']?>">В корзину</a>?>
<?php //var_dump($cart); ?>

</form>
</body>
</html>


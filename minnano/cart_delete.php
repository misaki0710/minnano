<?php require 'header.php';?>

<br>
<?php
	unset($_SESSION['product'][$_REQUEST['id']]);
	echo 'カートから商品を削除しました';
	echo '<br><br>';
	require 'cart.php';
?>
<?php require 'footer.php';?>

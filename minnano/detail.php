<?php require 'header.php';?>
<div class="pankuzu">
  <ul>
    <li><a href="index.php">HOME</a></li>
    <li><a href="index.php"> &gt; 商品詳細</a></li>
  </ul>
</div>
<?php
$pdo = new PDO('mysql:host=mysql1203b.xserver.jp;dbname=cbcgict_20126;charset=utf8','cbcgict_052020','CbcGict2020');
$sql = $pdo -> prepare('select * from product where id = ?');
$sql -> execute([$_REQUEST['id']]);

foreach($sql as $row){
?>
<p><img class="detail_img" src="image/thum/<?php echo $row['id']?>.jpg"></p>
<form action="cart_insert.php" method="post">
	<!-- <p><?php echo $row['id'] ?></p> -->
	<p><?php echo $row['name'] ?></p>
	<p>￥<?php echo $row['price'] ?>（税込）</p>
	<p>個数:
		<select name="count">
<?php
		for($i = 1;$i <= 10; $i++){
?>
			<option value="<?php echo $i ?>"><?php echo $i ?></option>
<?php
		}
?>
		</select>
	</p>
	<input type="hidden" name="id" value="<?php echo $row['id'] ?>">
	<input type="hidden" name="name" value="<?php echo $row['name'] ?>">
	<input type="hidden" name="price" value="<?php echo $row['price'] ?>">
	<p><input type="submit"  class="green_button"value="カートに追加"></p>
</form>
<p><a href="favorite_insert.php?id=<?php echo $row['id'] ?>"><i class="fas fa-heart my_pink"></i>お気に入りに追加</a></p>
<?php
}
?>
<?php require 'footer.php';?>

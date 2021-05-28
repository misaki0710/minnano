<?php require 'header.php'; ?>



<!-- コンテンツ開始 -->



<table>
	<tr>
		<th>商品番号</th>
		<th>商品名</th>
		<th>価格</th>
	</tr>
<?php
$pdo = new PDO('mysql:host=localhost;dbname=shop;charset=utf8','staff','password');
if(isset($_REQUEST['keyword'])){
	$sql = $pdo -> prepare('select * from product where name like ?');
	$sql -> execute(['%'.$_REQUEST['keyword'].'%']);
}else{
	$sql = $pdo -> prepare('select * from product');
	$sql -> execute([]);

/*
	$sql = $pdo -> query('select * from product');
*/
}

foreach($sql as $row){
	$id = $row['id'];
?>
	<tr>
		<td><?php echo $id ?></td>
		<td><a href="detail.php?id=<?php echo $id ?>"><?php echo $row['name'] ?></a></td>
		<td><?php echo $row['price'] ?></td>
	</tr>
<?php
}
?>
</table>





<!-- コンテンツ終了 -->

<?php require 'footer.php'; ?>

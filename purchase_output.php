
<?php require 'header.php';?>
<div class="pankuzu">
  <ul>
    <li><a href="index.php">HOME</a></li>
    <li><a href="purchase_input.php"> &gt; ご購入手続き</a></li>
  </ul>
</div>
<?php
	$pdo = new PDO('mysql:host=mysql1203b.xserver.jp;dbname=cbcgict_20126;charset=utf8','cbcgict_052020','CbcGict2020');
	$purchase_id=1;
	foreach($pdo->query('select max(id) from purchase') as $row){
		$purchase_id=$row['max(id)']+1;
	}
	$sql=$pdo->prepare('insert into purchase values(?,?)');
	if($sql->execute([$purchase_id,$_SESSION['customer']['id']])){
		foreach($_SESSION['product'] as $product_id=>$product){
			$sql=$pdo->prepare('insert into purchase_detail values(?,?,?,?,?)');
			$sql->execute([$purchase_id, $product_id,$_REQUEST['delitime'],$_REQUEST['date_time'],$product['count']]);
		}
		unset($_SESSION['product']);
		echo '購入手続きが完了しました。ありがとうございます。';
	}else{
		echo '購入手続き中にエラーが発生しました。申し訳ございません。';
	}
?>
<?php require 'footer.php';?>

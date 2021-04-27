<?php require 'header.php'; ?>



<!-- コンテンツ開始 -->
<div class="pankuzu">
  <ul>
    <li><a href="index.php">HOME</a></li>
    <li><a href="account.php"> &gt; アカウント情報</a></li>
  </ul>
</div>
<?php
	// unset($_SESSION['customer']);
	$pdo = new PDO('mysql:host=mysql1203b.xserver.jp;dbname=cbcgict_20126;charset=utf8','cbcgict_052020','CbcGict2020');

	if(isset($_SESSION['customer'])){
		$id=$_SESSION['customer']['id'];
		$sql=$pdo->prepare('select * from customer where id!=? and login=?');
		$sql->execute([$id,$_REQUEST['login']]);
	}else{
		$sql=$pdo->prepare('select * from customer where login=?');
		$sql->execute([$_REQUEST['login']]);
	}
	if(empty($sql->fetchAll())){
		if(isset($_SESSION['customer'])){
			$sql=$pdo->prepare('update customer set name=?,prefecture=?,address=?,payment=?,password=? where id=?');
			$sql->execute([
				$_REQUEST['name'],$_REQUEST['prefecture'],$_REQUEST['address'],$_REQUEST['payment'],$_REQUEST['password'],$id]);
				$_SESSION['customer']=[
					'id'=>$id,'name'=>$_REQUEST['name'],'prefecture'=>$_REQUEST['prefecture'],'address'=>$_REQUEST['address'],
					'payment'=>$_REQUEST['payment'],'login'=>$_REQUEST['login'],'password'=>$_REQUEST['password']];
					echo 'お客様情報を更新しました。';
		}else{
			$sql=$pdo->prepare('insert into customer values(null,?,?,?,?,?,?)');
			$sql->execute([
			$_REQUEST['name'],$_REQUEST['prefecture'],$_REQUEST['address'],$_REQUEST['payment'],$_REQUEST['login'],$_REQUEST['password']]);
			echo 'お客様情報を登録しました。';
		}
	}else{
		echo 'ログイン名がすでに使用されていますので、変更してください。';

	}
?>


<!-- コンテンツ終了 -->

<?php require 'footer.php'; ?>

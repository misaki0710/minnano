<?php require 'header.php'; ?>
<div class="pankuzu">
  <ul>
    <li><a href="index.php">HOME</a></li>
    <li><a href="account.php"> &gt; アカウント情報</a></li>
  </ul>
</div>
    <?php
    	unset($_SESSION['customer']);
    	$pdo = new PDO('mysql:host=mysql1203b.xserver.jp;dbname=cbcgict_20126;charset=utf8','cbcgict_052020','CbcGict2020');
    	$sql=$pdo->prepare('select * from customer where login=? and password=?');
    	$sql->execute([$_REQUEST['login'],$_REQUEST['password']]);

    	foreach($sql as $row){
    		$_SESSION['customer']=[
    			'id'=>$row['id'],'name'=>$row['name'],
          'prefecture'=>$row['prefecture'],
    			'address'=>$row['address'],'payment'=>$row['payment'],
    			'login'=>$row['login'],'password'=>$row['password']];
    	}

    	if(isset($_SESSION['customer'])){
    		echo 'いらっしゃいませ、' , $_SESSION['customer']['name'] ,'さん。';
    	}else{
    		echo 'ログイン名またはパスワードが違います。';
    	}
    ?>



<?php require 'footer.php'; ?>

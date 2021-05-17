
<?php require 'header.php'; ?>
<?php
  if(isset($_SESSION['customer'])){
    $pdo = new PDO('mysql:host=mysql1203b.xserver.jp;dbname=cbcgict_20126;charset=utf8','cbcgict_052020','CbcGict2020');
    $sql=$pdo->prepare('delete from favorite where customer_id=? and product_id=?');
    $sql->execute([$_SESSION['customer']['id'],$_REQUEST['id']]);
    echo 'お気に入りから商品を削除しました。';
    echo '<br><br>';
  }else {
    echo 'お気に入りから商品を削除するには、ログインしてください。';
  }

  require 'favorite.php';
?>
<?php require 'footer.php'; ?>


<?php require 'header.php'; ?>

<?php
  if (isset($_SESSION['customer'])) {
    $pdo = new PDO('mysql:host=mysql1203b.xserver.jp;dbname=cbcgict_20126;charset=utf8','cbcgict_052020','CbcGict2020');
    $sql=$pdo->prepare('insert into favorite values(?,?)');
    $sql->execute([$_SESSION['customer']['id'],$_REQUEST['id']]);
    echo 'お気に入りに商品を追加しました。';
    echo '<br><br>';


    require 'favorite.php';
} else {
    echo 'お気に入りを追加するには、ログインしてください。';
  }
?>
<?php require 'footer.php'; ?>

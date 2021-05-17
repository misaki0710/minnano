<?php require 'header.php'; ?>



<!-- コンテンツ開始 -->

<div class="pankuzu">
  <ul>
    <li><a href="index.php">HOME</a></li>
    <li><a href="account.php"> &gt; アカウント情報</a></li>
  </ul>
</div>

<?php
  if(isset($_SESSION['customer'])){
    unset($_SESSION['customer']);
    echo 'ログアウトしました。';
  }else{
    echo 'すでにログアウトしています。';
  }
?>






<!-- コンテンツ終了 -->

<?php require 'footer.php'; ?>

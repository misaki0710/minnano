<div class="pankuzu">
  <ul>
    <li><a href="index.php">HOME</a></li>
    <li><a href="favorite.php"> &gt; お気に入り</a></li>
  </ul>
</div>

<?php
  if (isset($_SESSION['customer'])) {

      echo '<table class="cart">';
      echo '<th class="tbl_pro">商品情報</th>
            <th class="tbl_fav">価格（税込）</th>
            <th class="tbl_fav"></th>';
      $pdo = new PDO('mysql:host=mysql1203b.xserver.jp;dbname=cbcgict_20126;charset=utf8','cbcgict_052020','CbcGict2020');
      $sql=$pdo->prepare('select * from favorite, product where customer_id=? and product_id=id');
      $sql->execute([$_SESSION['customer']['id']]);
      foreach ($sql as $row) {
        $id=$row['id'];
        echo '<tr>';
        echo '<td class="tbl_pro"><a href="detail.php?id=', $id ,'">
        <p class="cart_img"><img src="image/thum/', $id ,'.jpg" width="170px" height="170px"></p>
        <p class="cart_name">', $row['name'],'</p></a></td>';
        echo '<td class="tbl_other"><p class="cart_price">¥', $row['price'] ,'</p></td>';
        echo '<td class="tbl_other"><a href="favorite_delete.php?id=', $id ,'">削除</a></td>';
        echo '</tr>';
        }

      // echo '<p>お気に入りに商品が登録されていません。</p>';
      // echo '<p><a href="index.php">ショッピングを続ける</a></p>';
  }else{
    echo 'お気に入りを表示するには、ログインしてください。';
    echo '<br><br><br><a href="account.php">＞ログインする</a>';
  }


?>
      <th class="tbl_pro"></th>
      <th class="tbl_other"></th>
      <th class="tbl_other"></th>
      </table>

<?php require 'header.php'; ?>



<!-- コンテンツ開始 -->
<div class="pankuzu">
  <ul>
    <li><a href="index.php">HOME</a></li>
    <li><a href="p_drink.php"> &gt; ドリンク</a></li>
  </ul>
</div>
<table class="product">

<?php
  $pdo = new PDO('mysql:host=mysql1203b.xserver.jp;dbname=cbcgict_20126;charset=utf8','cbcgict_052020','CbcGict2020');
  $count = 0;
  echo '<tr>';
foreach($pdo->query('select * from product where cat_id=16') as $row){
    if($count < 4){?>
      <td>
         <a href="detail.php?id=<?php echo $row['id'] ?>">
         <img src="image/thum/<?php echo $row['id'] ?>.jpg" alt="<?php echo $row['name'] ?>" width="170px" height="170px">
         <br><?php echo $row['name'] ?></a><br>￥<?php echo $row['price'] ?>(税込)
      </td> <?php echo "\n";
      $count++;
    }else{
      echo '</tr>';
      echo '<tr>';
      $count = 0;
    }
  }
      ?>
  </tr>
  </table>






<!-- コンテンツ終了 -->

<?php require 'footer.php'; ?>

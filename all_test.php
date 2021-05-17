<?php require 'header.php';?>

<table class="product">

<?php
  $pdo=new PDO('mysql:host=localhost;dbname=shop;charset=utf8','staff','password');

  $count = 0;
  echo '<tr>';
  foreach($pdo->query('select * from product') as $row){
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
<br>






<?php require 'footer.php';?>

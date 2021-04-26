<?php require 'header.php'; ?>



<br><br>

          <!-- Swiper START -->
            <div class="swiper-container">
            	<!-- メイン表示部分 -->
            	<div class="swiper-wrapper">
            		<!-- 各スライド -->
            		<div class="swiper-slide"><a href="first.php"><img src="image/catch1.jpg" alt="はじめての方へ" width="700px" height="400px"></a></div>
            		<div class="swiper-slide"><a href="p_pick_up1.php"><img src="image/catch2.jpg" alt=" おでん特集" width="700px" height="400px"></a></div>
            		<!-- <div class="swiper-slide">Slide 3</div>
            		<div class="swiper-slide">Slide 4</div> -->
            	</div>
              <div class="swiper-pagination"></div>
            </div>
<!-- Swiper END -->
        	  <!-- <a href="first.html"> <img src="image/slide.jpg" alt="キャンペーン情報" width="700px" height="400px"></a> -->



            <table class="product">

            <?php
              $pdo = new PDO('mysql:host=mysql1203b.xserver.jp;dbname=cbcgict_20126;charset=utf8','cbcgict_052020','CbcGict2020');

              $count = 0;
              echo '<tr>';
              foreach($pdo->query('select * from product where pick_up_id=2') as $row){
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


<?php require 'footer.php'; ?>

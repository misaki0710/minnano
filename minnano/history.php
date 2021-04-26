<?php require 'header.php'; ?>
<div class="pankuzu">
  <ul>
    <li><a href="index.php">HOME</a></li>
    <li><a href="history.php"> &gt; 購入履歴</a></li>
  </ul>
</div>
<?php
if (isset($_SESSION['customer'])) {
	$pdo = new PDO('mysql:host=mysql1203b.xserver.jp;dbname=cbcgict_20126;charset=utf8','cbcgict_052020','CbcGict2020');
	$sql_purchase=$pdo->prepare('select * from purchase where customer_id=? order by id desc');
	$sql_purchase->execute([$_SESSION['customer']['id']]);
	foreach ($sql_purchase as $row_purchase) {
		$sql_detail=$pdo->prepare('select * from purchase_detail,product where purchase_id=? and product_id=id');
		$sql_detail->execute([$row_purchase['id']]);
?>
	<table class="cart">
		<tr>
			<th class="tbl_pro">商品情報</th>
			<th class="tbl_other">価格（税込）</th>
			<th class="tbl_other">数量</th>
			<th class="tbl_other">小計</th>
		</tr>
<?php
		$total=0;
		foreach ($sql_detail as $row_detail) {
?>
		<tr>
			<td><a href="detail.php?id=<?php echo $row_detail['id']; ?>">
				<p class="cart_img"><img src="image/thum/<?php echo $row_detail['id']; ?>.jpg" width="170px" height="170px"></p>
				<p class="cart_name"><?php echo $row_detail['name']; ?></p></a></td>
			<td><p class="cart_price">¥<?php echo $row_detail['price']; ?></p></td>
			<td><p class="cart_other"><?php echo $row_detail['count']; ?>個</p></td>
			<td><p class="cart_other"><?php
						$subtotal=$row_detail['price']*$row_detail['count'];
						$total+=$subtotal;
			?>¥<?php echo $subtotal; ?></p></td>

			<td></td>
		</tr>
<?php
		}
?>
<tr>
	<td class="tbl_pro"><p class="cart_price">　配送料</p><br>
		<p class="cart_price">　<?php
    $payment = '';
    if(isset($_SESSION['customer'])){
      $payment = $_SESSION['customer']['payment'];
    }
      if($payment == 1){
        echo 'クレジット手数料';
      }else if($payment == 2){
        echo 'コンビニ払い手数料';
      }else{
        echo '代引手数料';
      } ?></p></td>
	<td class="tbl_other">
<!-- 配送料 -->
		<p class="cart_price">
			<?php if($total>=3000){
			$deli_fee = 0;
			}else{
				$deli_fee = 400;
			}
			echo '¥',$deli_fee; ?></p>
			<br>
<!-- 手数料 -->
      <p class="cart_price">
        <?php
        if($payment == 1){
          $pay_fee = 0;
        }else {
          $pay_fee = 200;
        }
        echo '¥',$pay_fee; ?></p>
		</td>
	<td class="tbl_other"></td>
	<td class="tbl_other"><p class="cart_other"><?php $total += $deli_fee; echo '¥',$deli_fee; ?></p><br>
	<p class="cart_other"><?php $total += $pay_fee; echo '¥',$pay_fee; ?></p></td>
</tr>
		<tr>
			<th class="tbl_pro"></th>
			<th class="tbl_other"></th>
			<th class="tbl_other">合計（税込）</th>
			<th class="tbl_other">¥<?php echo $total; ?></th>
		</tr>
	</table>
	<br><br><br><br>
<?php
	}
} else {
	echo '購入履歴を表示するには、ログインしてください。';
  echo '<br><br><br><a href="account.php">＞ログインする</a>';
}
?>
<?php require 'footer.php'; ?>

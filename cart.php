<div class="pankuzu">
  <ul>
    <li><a href="index.php">HOME</a></li>
    <li><a href="cart.php"> &gt; カート</a></li>
  </ul>
</div>
<?php
if(!empty($_SESSION['product'])){
?>
	<table class="cart">
		<tr>
			<!-- <th>商品番号</th> -->
			<th class="tbl_pro">商品情報</th>
			<th class="tbl_other">価格（税込）</th>
			<th class="tbl_other">数量</th>
			<th class="tbl_other">小計</th>
		</tr>
<?php
	$total = 0;
	foreach($_SESSION['product'] as $id => $product){
?>
		<tr>
			<td><a href="detail.php?id=<?php echo $id; ?>"><p class="cart_img">
				<img src="image/thum/<?php echo $id; ?>.jpg" width="170px" height="170px"></p>
				<p class="cart_name"><?php echo $product['name']; ?></p></a></td>
			<td><p class="cart_price">¥<?php echo $product['price']; ?></p></td>
			<td><p class="cart_other"> <?php echo $product['count']; ?>個 / <a href="cart_delete.php?id=<?php echo $id; ?>">削除</p></a></td>
			<td><p class="cart_other"><?php
					$subtotal = $product['price'] * $product['count'];
					$total += $subtotal;
			?>¥<?php echo $subtotal; ?></p></td>

		</tr>
<?php
	}
?>
		<tr>
			<td class="tbl_pro"><p class="cart_price">　配送料</p>
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
					} ?>
				<br><small>※お支払い方法は<a href="account.php">登録情報の更新</a>から変更できます</small>
			</p></td>
			<td class="tbl_other">
<!-- 配送料 -->
				<p class="cart_price">
						<?php if($total>=3000){
						$deli_fee = 0;
						}else{
							$deli_fee = 400;
						}
						echo '¥',$deli_fee; ?><br><br>
				</p>
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
	<p>※<span class="my_red">3000円以上</span>お買い上げで配送料無料！</p><br>
	<p><a href="purchase_input.php" class="purchase_button">購入へ進む</a></p>
<?php
}else{
	echo 'カートに商品がありません';
}
?>

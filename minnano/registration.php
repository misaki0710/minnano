<?php require 'header.php'; ?>



<!-- コンテンツ開始 -->
<div class="pankuzu">
  <ul>
    <li><a href="index.php">HOME</a></li>
    <li><a href="account.php"> &gt; アカウント情報</a></li>
  </ul>
</div>
<?php
$name = $address = $login = $password = '';
if(isset($_SESSION['customer'])){
	$name = $_SESSION['customer']['name'];
	$prefecture = $_SESSION['customer']['prefecture'];
	$address = $_SESSION['customer']['address'];
	$login = $_SESSION['customer']['login'];
	$password = $_SESSION['customer']['password'];
}
?>

				<br><br><br>
				<h4>　新規会員登録　</h4><br><br><br>
				<form action="registration_output.php" method="post">
					<table class="form_tbl">
						<tr>
							<td>*お名前:</td>
							<td><input type="text" name="name" value="<?php echo $name ?>" required></td>
						</tr>
						<tr>
							<td>*ご住所:</td>
							<td><select class="form_pre" name="prefecture" required>
						    <option value="東京都">東京都</option>
						    <option value="神奈川県">神奈川県</option>
						  </select><br>
								<input class="clear" type="text" name="address" value="<?php echo $address ?>"></td>
						</tr>
						<tr>
							<td>*ログイン名:</td>
							<td><input type="text" name="login" value="<?php echo $login ?>" required></td>
						</tr>
						<tr>
							<td>*パスワード:</td>
							<td><input type="password" name="password" value="<?php echo $password ?>" required></td>
						</tr>
						<tr>
							<td>*お支払い方法:</td>
							<td>
		            <input type="radio" name="payment" value="1" checked>クレジット払い　　<br>
		            <input type="radio" name="payment" value="2"> コンビニ払い　　<br>
		            <input type="radio" name="payment" value="3"> 代金引換払い　　
		          </td>
	        	</tr>
					</table><p>*入力必須項目です。<br>ログイン名以外は後から変更することができます。</p><br>
					<p><input type="submit" class="green_button" value="新規登録する"></p>
					</form>



<!-- コンテンツ終了 -->

<?php require 'footer.php'; ?>

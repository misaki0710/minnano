<?php require 'header.php'; ?>



<!-- コンテンツ開始 -->
<div class="pankuzu">
  <ul>
    <li><a href="index.php">HOME</a></li>
    <li><a href="account.php"> &gt; アカウント情報</a></li>
  </ul>
</div>

<?php
$name = $prefecture = $address = $payment = $login = $password = '';
if(isset($_SESSION['customer'])){
	$name = $_SESSION['customer']['name'];
	$prefecture = $_SESSION['customer']['prefecture'];
	$address = $_SESSION['customer']['address'];
	$payment = $_SESSION['customer']['payment'];
	$login = $_SESSION['customer']['login'];
	$password = $_SESSION['customer']['password'];
}
 if(isset($_SESSION['customer'])) {
	?>

<br><br>
<h4>　登録情報の更新はこちらから　</h4><br><br>
<form action="registration_output.php" method="get">
  <table class="form_tbl">
    <tr>
      <td>お名前:</td>
      <td><input type="text" name="name" value="<?php echo $name ?>"></td>
    </tr>
    <tr>
      <td>ご住所:</td>
      <td><select class="form_pre" name="prefecture">
        <option value="東京都">東京都</option>
        <option value="神奈川県">神奈川県</option>
      </select><br>
        <input class="clear" type="text" name="address" value="<?php echo $address ?>"></td>
    </tr>
    <tr>
      <td>お支払い方法:</td>
			<td>
        <?php
        $payment_array = ['クレジット払い','コンビニ払い','代金引換払い'];
        for( $i=0 ; $i < count($payment_array) ; $i++){
          if($payment == ($i+1)){
            echo '<input type="radio" name="payment" value="', $i+1 ,'" checked>',$payment_array[$i],'<br>';
          }else{
            echo '<input type="radio" name="payment" value="', $i+1 ,'" >',$payment_array[$i],'<br>';
          }
        }
        ?>
				<!-- <input type="radio" name="payment" value="1">クレジット払い　　<br>
				<input type="radio" name="payment" value="2"> コンビニ払い　　<br>
				<input type="radio" name="payment" value="3"> 代金引換払い　　 -->
      </td>
    </tr>
		<tr>
      <td>ログイン名:</td>
      <td><input type="text" name="login" value="<?php echo $login ?>"></td>
    </tr>
    <tr>
      <td>パスワード:</td>
      <td><input type="password" name="password" value="<?php echo $password ?>"></td>
    </tr>
  </table><br>

  <p><input type="submit" class="green_button" value="更新する"></p>
  </form>
<br><br>
<hr><br>
	<p>ログアウトしますか？</p>
	<a href="logout_output.php">＞ログアウト</a><br><br>
	<br>

<?php }else { ?>
		<br><br><br>
		<?php require 'login.php';?>
<?php }?>


<!-- コンテンツ終了 -->
<?php require 'footer.php'; ?>

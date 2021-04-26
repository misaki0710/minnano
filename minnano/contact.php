<?php require 'header.php'; ?>
<div class="pankuzu">
  <ul>
    <li><a href="index.php">HOME</a></li>
    <li><a href="contact.php"> &gt; ヘルプ</a></li>
  </ul>
</div>
<div class="help">
<?php if (isset($_SESSION['customer'])) { ?>
<br>
    <table>
      <tr>
        <th>ユーザー名</th>
        <td><?php echo $_SESSION['customer']['name'] ;?> 様</td>
      </tr>
    </table>
<br><br>
    <p>以下のフォームにご記入の上、送信してください。</p>
    <form action="contact_output.php" method="post">

      <table>
        <tr><th></th><th>入力欄</th></tr>
        <tr>
          <td>ご用件</td><td>
            <input type="radio" name="requests" value="question" checked>質問
            <input type="radio" name="requests" value="request">要望
            <input type="radio" name="requests" value="opinion">意見
          </td>
        </tr>
        <tr>
          <td>ご用件の内容</td><td>
            <textarea name="reason" placeholder="できるだけ具体的な内容を入力してください。"></textarea>
          </td>
        </tr>
      </table>

      <br><br>
      <input type="submit" value="確定">
      <input type="reset" value="リセット">
    </form>


<?php }else{ ?>

    <p>以下のフォームにご記入の上、送信してください。</p>
    <form action="contact_output.php" method="post">

      <table>
        <tr><th></th><th>入力欄</th></tr>
        <tr>
          <td>名前（必須）</td><td>
            <input type="text" name="user" placeholder="全角で入力してください" required>
          </td>
        </tr>
        <tr>
          <td>ご用件</td><td>
            <input type="radio" name="requests" value="question" checked>質問
            <input type="radio" name="requests" value="request">要望
            <input type="radio" name="requests" value="opinion">意見
          </td>
        </tr>
        <tr>
          <td>ご用件の内容</td><td>
            <textarea name="reason" placeholder="できるだけ具体的な内容を入力してください。"></textarea>
          </td>
        </tr>
      </table>

      <br><br>
      <input type="submit" value="確定">
      <input type="reset" value="リセット">
    </form>
  <?php
}
?>

  </div>
<?php require 'footer.php'; ?>

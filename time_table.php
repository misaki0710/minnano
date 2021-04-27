<?php require 'header.php'; ?>



<!-- コンテンツ開始 -->
<div class="pankuzu">
  <ul>
    <li><a href="index.php">HOME</a></li>
    <li><a href="time_table.php"> &gt; ヘルプ</a></li>
  </ul>
</div>
<div class="help">
  <br><br><br>
  <h4>　配送時間表　</h4><br><br>
  <p>配達時間を以下の区分からお選びいただけます。</p><br>
<div class="time_table">
  <table>
    <tr><th>区分</th></tr>
    <tr><td>9：00 ～ 12：00 （午前中）</td></tr>
    <tr><td>12：00 ～ 14：00</td></tr>
    <tr><td>14：00 ～ 16：00</td></tr>
    <tr><td>16：00 ～ 18：00</td></tr>
    <tr><td>18：00 ～ 20：00</td></tr>
  </table>
<p>※ご指定の時間帯はご在宅いただきますよう、よろしくお願い申し上げます。</p>
</div>
<br><br>
  <br>
  <div class="problem">
    <p>問題は解決しましたか？</p>
    <table>
      <tr>
        <td><button type="button" id="help" class="green_button" onclick="clickHelp()">はい、解決しました</button></td>
        <td><a href="contact.php">
          <button type="button" class="green_button">解決していないので<br>問い合わせをします</button></a>
        </td>
      </tr>
    </table>
  </div>
</div>

<!-- コンテンツ終了 -->

<?php require 'footer.php'; ?>

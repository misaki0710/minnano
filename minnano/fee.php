<?php require 'header.php'; ?>



<!-- コンテンツ開始 -->
<div class="pankuzu">
  <ul>
    <li><a href="index.php">HOME</a></li>
    <li><a href="fee.php"> &gt; ヘルプ</a></li>
  </ul>
</div>
<div class="help">
  <br><br><br>
  <h4>　配送料・利用料　</h4><br><br>
  <p>ご利用のサービスにより、商品代金の他に配送料と利用料が追加されます。</p><br>

  <table>
    <caption>【利用料】</caption>
    <tr><th>お支払い方法</th><th>料金</th></tr>
    <tr>
      <td>クレジットカード払い</td>
      <td>0円</td>
    </tr>
    <tr>
      <td>コンビニ払い</td>
      <td>200円</td>
    </tr>
    <tr>
      <td>代金引換</td>
      <td>200円</td>
    </tr>
  </table>
<br><br>
  <table>
    <caption>【配送料】</caption>
    <tr><th>東京都、神奈川県</th><th>料金</th></tr>
    <tr>
      <td>一律</td>
      <td>400円</td>
  </table>
<p><strong>※<span class="my_red">3000円以上</span>お買い上げで、配送料は<span class="my_red">0円</span>となります！</strong></p>
<br><br><br>
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
<br><br><br>

<!-- コンテンツ終了 -->

<?php require 'footer.php'; ?>

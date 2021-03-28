<?php require 'header.php'; ?>



<!-- コンテンツ開始 -->
<div class="pankuzu">
  <ul>
    <li><a href="index.php">HOME</a></li>
    <li><a href="area.php"> &gt; ヘルプ</a></li>
  </ul>
</div>
<div class="help">
  <br><br><br>
  <h4>　配送エリア一覧　</h4><br><br>
  <p>配達可能な地域は以下の通りです。</p><br>

  <table>
    <tr><th>地域</th><th>詳細</th></tr>
    <tr>
      <td>東京都</td>
      <td>全域</td>
    </tr>
    <tr>
      <td>神奈川県</td>
      <td>全域</td>
    </tr>
    <tr>
      <td>その他の地域</td>
      <td><small>申し訳ございませんが<br>現在ご利用いただけません</small></td>
    </tr>
  </table>
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

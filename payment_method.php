<?php require 'header.php'; ?>



<!-- コンテンツ開始 -->
<div class="pankuzu">
  <ul>
    <li><a href="index.php">HOME</a></li>
    <li><a href="payment_method.php"> &gt; ヘルプ</a></li>
  </ul>
</div>
<div class="help">
  <br><br><br>
  <h4>　お支払い方法　</h4><br><br>
  <p>お支払い方法は以下の3種類からお選びいただけます。</p><br>
  <p><strong>・クレジットカード払い</strong>（手数料：0円）<br>
    ご購入前にクレジットカードの登録が必要となります。<br><br>
    ご利用いただけるクレジットカードは、<br>
    VISA、Mastercard、JCB、American Express となっております。<br>
    お支払い方法は『１回払い』のみ承らせていただきます。<br>
    また、カード名義人ご本人様のもののみ決済にご使用いただけます。<br>
  </p>
  <p><strong>・コンビニ払い</strong>（手数料：200円）<br>
    ご購入後に発送されるメールの案内に従って、<br>
    全国のコンビニエンスストアにてお支払いください。
  </p>
  <p><strong>・代金引換払い</strong>（手数料：200円）<br>
    商品の受け取り時に、配達員に直接代金をお支払いください。<br>
  </p>
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

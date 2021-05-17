</div>
<p class="pagetop"><a href="#"><img src="image/top.jpg" width="100px" height="100px" alt="ページトップヘ"></a></p>
</div><!-- /.container -->
</main>
<footer>
<div class="container">
<div class="footer">
  <p> </P>
  <div class="mb_hidden">

    <table>
      <tr>
      <td class="fot_line"><i class="far fa-question-circle my_footer"></i> <strong>ヘルプ</strong><br>
          <br>
          <a href="first.php">はじめての方へ</a><br>
          <a href="registration.php">会員登録</a><br>
          <a href="fee.php">配送料・利用料</a></td>
        <td class="fot_line"><br><br>
          <a href="area.php">配達エリア一覧</a><br>
          <a href="time_table.php">配達時間表</a><br>
          <a href="payment_method.php">お支払い方法</a><br>
          <a href="contact.php">お問い合わせ</a></td>
        <td><i class="far fa-building my_footer"></i> <strong>会社概要</strong><br>
          <br><address>
          〒XXX-XXXX<br>
          神奈川県横浜市西区XX-XX-X<br>
      tel XXX-XXX-XXXX</address></td>
      </tr>
    </table><br>
  </div><!-- /.mb_hidden -->
  <div class="mb_pop">
    <table>
      <caption><i class="far fa-question-circle my_footer"></i> <strong>ヘルプ</strong></caption>
      <tr>
        <td><a href="first.php">はじめての方へ</a></td>
        <td><a href="registration.php">会員登録</a></td>
      </tr>
      <tr>
        <td><a href="fee.php">配送料・利用料</a></td>
        <td><a href="area.php">配達エリア一覧</a></td>
      </tr>
      <tr>
        <td><a href="time_table.php">配達時間表</a></td>
        <td><a href="payment_method.php">お支払い方法</a></td>
      </tr>
      <tr>
        <td colspan="2"><a href="contact.php">お問い合わせ</a></td>
      </tr>

    </table><br><br>
    <table>
      <caption><i class="far fa-building my_footer"></i> <strong>会社概要</strong></caption>
      <tr>
        <td>
          <address>
          〒XXX-XXXX<br>
          神奈川県横浜市西区XX-XX-X</address>
        </td>
        <td>
          <address>tel XXX-XXX-XXXX</address>
        </td>
      </tr>
    </table>
  </div><br><br>
  <small>Copyright &copy; 2021 Minnano Net Super. All Rights Reserved.</small>

</div><!-- /.footer -->
</div><!-- /.container -->
</footer>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.3/js/swiper.min.js">
</script>
<script src="_common/scripts/jquery-3.4.1.min.js">
</script>
<script>
    'use strict';

// サイドメニュー
    $(document).ready(function(){
        $('.submenu h3').on('click',function(){
            $(this).next().slideToggle();
        });
    });

// スライドショー
  var mySwiper = new Swiper('.swiper-container', {
    autoplay: {
		delay: 3000,
		stopOnLastSlide: false,
		disableOnInteraction: false,
		reverseDirection: false
	},
    loop: true,
    pagination: {
		el: '.swiper-pagination',
		type: 'bullets',
		clickable: true
	}

  });

// ヘルプの問題解決後の表示
    function clickHelp(){
      document.getElementById('help').textContent = 'ありがとうございました。';
    }

// レスポンシブデザインのハンバーガーメニュー
    $(function(){
        $('#open_nav').on('click',function(){
            $('#nav').toggleClass('show');
        });
    });
     $(function(){
        $('.logo').on('click',function(){
            $('#nav').toggleClass('show');
        });
    });
</script>

</body>
</html>

<?php session_start();?>
<!doctype html>

<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width;">
    <title>ミンナノ | ネットスーパー</title>

    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.css"> -->
    <link href="css/mystyle.css" rel="stylesheet" type="text/css">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.3/css/swiper.min.css">
  </head>

  <body>
    <header>
      <div class="container">
        <div class="header">
          <a href="index.php"><img alt="ロゴ" src="image/logo.jpg" width="200px" height="100px"></a>
          <span class="mb_pop"><img id="open_nav" src="image/mb_menu.jpg" alt="メニュー" width="100px" height="100px"></span>


        <nav class="mb_hidden">
          <ul>
              <li class="search_form">
                <form action="product.php" method="post">
                	<input class="search_term" type="search" name="keyword">
        			    <button class="search_button" type="submit">検索</button>
        		    </form>
              </li>
            <!-- <li><a href="campaign.html"><br>キャンペーン</a></li> -->
            <li><a href="favorite_show.php">お気に入り</a> </li>
            <li><a href="history.php">購入履歴</a></li>
            <li><a href="cart_show.php"><span class="nav_icon">

<!-- トップページにカートの情報を表示させる-->
              <?php if(isset($_SESSION['customer'])) {
                if(empty($_SESSION['product'])){
                    ?>
                    合計：0円

                  <?php 	}else {

                		$total = 0;
                		foreach($_SESSION['product'] as $id => $product){
                      $subtotal = $product['price'] * $product['count'];
          						$total += $subtotal;
                  }

                   echo '合計：',$total,'円';
                }
                }else{
              }

              ?>

            </span><i class="fas fa-shopping-cart fa-2x"></i></a> </li>
            <li><a href="account.php"><i class="fas fa-user fa-2x"><span class="nav_icon">▼</span></i></a> </li>
      	    <li class="nav_account"><a href="purchase_input.php" class="purchase_button">購入へ進む</a></li>
          </ul>
        </nav>
  </div><!-- /.header -->
      <div class="h1">

<?php if (isset($_SESSION['customer'])) {
          echo '<span class="register"><h1>ようこそ',
          htmlspecialchars($_SESSION['customer']['name']) ,'さん!</h1></span>';
  }else{
            echo'<span class="register"> <div class="mb_hidden">
      	   <h1>便利なネットスーパーをはじめましょう</h1>　</div>
           <a href="account.php">会員登録・ログイン はこちら</a>
      	</span>';
}
?>
</div>
      </div><!-- /.container -->

    </header>
    <main>
      <div class="mb_pop">
        <nav id="nav" class="show">
            <div class="logo"><img src="image/mb_batsu.jpg" alt="閉じる" width="100px" height="100px"></div>
            <ul>

                <li><a href="index.php">Home</a></li>
                <li><a href="account.php">アカウント</a></li>
                <li><a href="favorite_show.php">お気に入り</a></li>
                <li><a href="history.php">購入履歴</a></li>
                <li><a href="cart_show.php">カート</a></li>
                <li>　</li>
                <li>
                  <form action="product.php" method="post">
                  商品を探す：<br>
                	<input class="search_term" type="search" name="keyword">
        			    <button class="search_button" type="submit">検索</button>
        		      </form>
                </li>
            </ul>
        </nav>
      </div>
      <div class="container">
        <div class="category">

<!--  レスポンシブ用-->
<div class="submenu">
  <div class="mb_pop">
    <h3>カテゴリーを開く ＞</h3>
    <ul class="hidden">
      <li>
        <table width="200" border="1">
          <tbody>

            <tr>
              <th scope="row">
                 <div class="submenu">
                   <h3>生鮮・チルド ＞</h3>
                   <ul class="hidden">
                     <li><a href="p_vegetables.php">- 野菜</a></li>
                     <li><a href="p_fruits.php">- 果物</a></li>
                     <li><a href="p_meat.php">- お肉</a></li>
                     <li><a href="p_fish.php">- お魚</a></li>
                     <li><a href="p_dairy_product.php">- 卵・乳製品・他</a></li>
                     <li><a href="p_deli.php">- お惣菜</a></li>
                     <li><a href="p_chilled.php">- カテゴリー全体</a></li>
                   </ul>
                 </div>
               </th>
             </tr>
             <tr>
              <th scope="row">
                <div class="submenu">
                  <h3>米・パン・麺類 ＞</h3>
                  <ul class="hidden">
                    <li><a href="p_rice.php">- 米</a></li>
                    <li><a href="p_bread.php">- パン</a></li>
                    <li><a href="p_noodles.php">- 麺類</a></li>
                    <li><a href="p_serial.php">- シリアル</a></li>
                    <li><a href="p_staple_food.php">- カテゴリー全体</a></li>
                  </ul>
                </div>
              </th>
            </tr>
          <tr>
            <th scope="row"> <div class="submenu">
                 <h3>加工食品 ＞</h3>
                <ul class="hidden">
                  <li><a href="p_cold_food.php">- 冷食</a></li>
                  <li><a href="p_seasoning.php">- 調味料</a></li>
                  <li><a href="p_dry_flour.php">- 乾物</a></li>
                  <li><a href="p_sweets.php">- お菓子</a></li>
                  <li><a href="p_processed_food.php">- カテゴリー全体</a></li>
                </ul>
              </div>
            </th>
          </tr>
          <tr>
            <th scope="row"> <div class="submenu">
                 <h3>飲料・お酒 ＞</h3>
                <ul class="hidden">
                  <li><a href="p_water.php">- 水</a></li>
                  <li><a href="p_drink.php">- ドリンク</a></li>
                  <li><a href="p_tea_coffee.php">- 茶葉・コーヒー</a></li>
                  <li><a href="p_alcohol.php">- お酒</a></li>
                  <li><a href="p_bevarage.php">- カテゴリー全体</a></li>
                </ul>
              </div>
            </th>
          </tr>
          <tr>
            <th scope="row"> <div class="submenu">
                 <h3>日用品 ＞</h3>
                <ul class="hidden">
                  <li><a href="p_papers.php">- ペーパー類</a></li>
                  <li><a href="p_detergent.php">- 住居用洗剤</a></li>
                  <li><a href="p_hygiene.php">- 衛生用品</a></li>
                  <li><a href="p_body_care.php">- ボディケア</a></li>
                  <li><a href="p_daily_necessities.php">- カテゴリー全体</a></li>
                </ul>
              </div>
            </th>
          </tr>
          <tr>
            <th scope="row"> <div class="submenu">
                 <h3>ベビー ＞</h3>
                <ul class="hidden">
                  <li><a href="p_milk.php">- ミルク</a></li>
                  <li><a href="p_baby_food.php">- 離乳食</a></li>
                  <li><a href="p_diapers.php">- おむつ</a></li>
                  <li><a href="p_baby_care.php">- ベビーケア</a></li>
                  <li><a href="p_baby.php">- カテゴリー全体</a></li>
                </ul>
              </div>
            </th>
          </tr>
        </tbody>
      </table>
      </li>
    </ul>
  </div>
</div>
<!-- レスポンシブ用終了 -->
        <div class="mb_hidden">
          <p class="cat"><h2>カテゴリ一覧</h2></p>
          <p>
            <table width="200" border="1">
              <tbody>

                <tr>
                  <th scope="row">
                     <div class="submenu">
        			         <h3>生鮮・チルド ＞</h3>
                       <ul class="hidden">
                         <li><a href="p_product.php?id=1">- 野菜</a></li>
                         <li><a href="p_product.php?id=2">- 果物</a></li>
                         <li><a href="p_product.php?id=3">- お肉</a></li>
                         <li><a href="p_product.php?id=4">- お魚</a></li>
                         <li><a href="p_product.php?id=5.php">- 卵・乳製品・他</a></li>
                         <li><a href="p_product.php?id=6.php">- お惣菜</a></li>
                         <li><a href="p_product.php?id=1-7.php">- カテゴリー全体</a></li>
                       </ul>
                     </div>
                   </th>
                 </tr>
                 <tr>
                  <th scope="row">
                    <div class="submenu">
      			          <h3>米・パン・麺類 ＞</h3>
                      <ul class="hidden">
                        <li><a href="p_rice.php">- 米</a></li>
                        <li><a href="p_bread.php">- パン</a></li>
                        <li><a href="p_noodles.php">- 麺類</a></li>
                        <li><a href="p_serial.php">- シリアル</a></li>
                        <li><a href="p_staple_food.php">- カテゴリー全体</a></li>
                      </ul>
                    </div>
                  </th>
                </tr>
              <tr>
                <th scope="row"> <div class="submenu">
      			         <h3>加工食品 ＞</h3>
                    <ul class="hidden">
                      <li><a href="p_cold_food.php">- 冷食</a></li>
                      <li><a href="p_seasoning.php">- 調味料</a></li>
                      <li><a href="p_dry_flour.php">- 乾物</a></li>
                      <li><a href="p_sweets.php">- お菓子</a></li>
                      <li><a href="p_processed_food.php">- カテゴリー全体</a></li>
                    </ul>
                  </div>
                </th>
              </tr>
              <tr>
                <th scope="row"> <div class="submenu">
      			         <h3>飲料・お酒 ＞</h3>
                    <ul class="hidden">
                      <li><a href="p_water.php">- 水</a></li>
                      <li><a href="p_drink.php">- ドリンク</a></li>
                      <li><a href="p_tea_coffee.php">- 茶葉・コーヒー</a></li>
                      <li><a href="p_alcohol.php">- お酒</a></li>
                      <li><a href="p_bevarage.php">- カテゴリー全体</a></li>
                    </ul>
                  </div>
                </th>
              </tr>
              <tr>
                <th scope="row"> <div class="submenu">
      			         <h3>日用品 ＞</h3>
                    <ul class="hidden">
                      <li><a href="p_papers.php">- ペーパー類</a></li>
                      <li><a href="p_detergent.php">- 住居用洗剤</a></li>
                      <li><a href="p_hygiene.php">- 衛生用品</a></li>
                      <li><a href="p_body_care.php">- ボディケア</a></li>
                      <li><a href="p_daily_necessities.php">- カテゴリー全体</a></li>
                    </ul>
                  </div>
                </th>
              </tr>
              <tr>
                <th scope="row"> <div class="submenu">
      			         <h3>ベビー ＞</h3>
                    <ul class="hidden">
                      <li><a href="p_milk.php">- ミルク</a></li>
                      <li><a href="p_baby_food.php">- 離乳食</a></li>
                      <li><a href="p_diapers.php">- おむつ</a></li>
                      <li><a href="p_baby_care.php">- ベビーケア</a></li>
                      <li><a href="p_baby.php">- カテゴリー全体</a></li>
                    </ul>
                  </div>
                </th>
              </tr>
            </tbody>
          </table>
          </p>
        </div>
        </div>


          <div class="main">

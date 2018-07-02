<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>memberﾌﾟﾛﾄ</title>
    <link rel="stylesheet" href="stylesheet.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

  </head>
  <body>
    <!-- ここにコードを書いていきましょう -->
    <header>
      <div class="container">

        <div class="header-top">
          <h1>会社名：XYZ株式会社</h1>
        <div class="clear"></div>
        </div>

    <div class="header-titles">

      <div class="header-title">
        <a href="index.html"><img src="https://terumay02.github.io/sozai/blue-dot.png"></a>
        <p>ホーム</p>
      </div>

      <div class="header-title">
        <img src="https://terumay02.github.io/sozai/%E9%87%91%E9%AD%9A.png">
        <p>●●●とは</p>
      </div>
      <div class="header-title">
        <img src="https://terumay02.github.io/sozai/blue-dot.png">
        <p>サービス一覧</p>
      </div>
      <div class="header-title">
        <img src="https://terumay02.github.io/sozai/%E9%87%91%E9%AD%9A.png">
        <p>リンク</p>
      </div>

      </div>
     </div>
    </header>
 <!--  サイド    -->
    <div class="bodybody">
       <div class="container">

      <div class="body-left">

        <div class="sidebar">

        <a href="member.html"><img src="https://terumay02.github.io/sozai/take.png"></a>
        <a href="member.html"><p>会員募集</p></a>
        </div>

        <div class="sidebar">
        <a href="product.html"><img src="https://terumay02.github.io/sozai/take.png"></a>
        <a href="product.html"><p>商品一覧</p></a>
        </div>

        <div class="sidebar">
        <img src="https://terumay02.github.io/sozai/take.png">
         <a href="#"><p>配送料</p></a>
        </div>

        <div class="sidebar">
        <img src="https://terumay02.github.io/sozai/take.png">
        <a href="#"><p>お問い合わせ</p></a>
        </div>

        <div class="sidebar">
        <img src="https://terumay02.github.io/sozai/take.png">
         <a href="#"><p>連絡先</p></a>
        </div>


      </div>
      <div class="body-right">
        <div class="body-title">
          <a href="#"><img class="top-title" src="https://terumay02.github.io/sozai/03.%E6%9C%A8.png">
          </a>
          <p>会員登録</p>
    <!--      <div class="clear"></div>     -->
        </div>

      <div class="member-send">

        <form action="sent.php" method="post">

          <p>名前（必須）</p>
            <input type="text" name="name">
          <p>メールアドレス（必須）</p>
            <input type="text" name="mail">
          <p>その他コメント（任意）</p>
            <textarea name="comment"></textarea>

     <!--     <br>   -->
          <input type="submit" value="送信" class="btn-send">

        <div class="clear"></div>
      </div>
        </form>

  <!-- index.html専用
  <img src="https://terumay02.github.io/sozai/02.office.png"> -->
      </div>

     </div>
    </div>

    <footer>

    </footer>
    <div class="clear"></div>
  </body>
</html>

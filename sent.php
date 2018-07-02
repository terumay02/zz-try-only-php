<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>sent.php</title>
    <link rel="stylesheet" href="stylesheet.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

  </head>
  <body>
       <header>
      <div class="container">

        <div class="header-top">
          <h1>会社名：XYZ株式会社</h1>
        <div class="clear"></div>
        </div>
      </div>
    </header>
  <div class="container">
  <div class="main">
    <div class="thanks-message">お問い合わせいただきありがとうございます。</div>
    <div class="display-contact">

      <div class="form-title">入力内容</div>

      <div class="form-item">■ 名前</div>
      <!-- nameを受け取りechoしましょう -->
      <?php
      echo $_POST["name"];
      ?>

      <div class="form-item">■ メールアドレス</div>
     <?php
      echo $_POST["mail"];
      ?>

      <div class="form-item">■ その他コメント</div>
     <?php
      echo $_POST["comment"];
      ?>

    </div>

  </div>
  </div>
  <footer></footer>
</body>
</html>

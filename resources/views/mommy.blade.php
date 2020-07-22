<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>mommy</title>
  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('/assets/css/mommy.css')}}">
</head>
<body>
  <header>
    <div class="header-left">
      <h2>Mommy Book</h2>
    </div>
    <div class="header-right">
      <i class="fas fa-bars"></i>
    </div>
  </header>

  <div class="top-wrapper">
    <div class="top-box">
      <div class="box-left">
        <img src="img/matanity.jpg" alt="">
      </div>
      <div class="box-right">
        <h1>妊娠◯ヶ月</h1>
        <h1>おめでとう</h1>
        <button>生まれたよ</button>
      </div>
    </div>
  </div>

  <div class="main-wrapper">
    <div class="heading">
      <h1>✳︎ 妊娠◯週目 ✳︎</h1>
    </div>
    <div class="mommy-details">
      <div class="detail">
        <h2>グラフ</h2>
        <img src="img/graph.png" alt="">
      </div>
      <div class="detail">
        <h2>検診結果</h2>
        <p>最新の結果詳細</p>
        <div class="detail-button">
          <a href="momcheckups">一覧ページ</a>
        </div>
      </div>
    </div>
  </div>

  <div class="button-wrapper">
    <div class="buttons">
      <button><a href="momcheckups_form">検診結果入力</a></button>
      <button><a href="baby">赤ちゃんページ</a></button>
      <button><a href="#">カレンダー</a></button>
      <button><a href="#">子育て情報一覧</a></button>
    </div>
  </div>

  <footer>
  </footer>
</body>
</html>
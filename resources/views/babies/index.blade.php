<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>baby</title>
  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('/assets/css/baby.css')}}">
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

  <div class="babies-wrapper">
    <div class="bars">
      <div class="babies">
        @foreach($babies as $baby)
          <!-- 条件分岐 -->
          @if($baby->gender == "男性")
            <a href="#">{{$baby->nickname}}くん</a>
          @elseif($baby->gender == "女性")
            <a href="#" class="girl">{{$baby->nickname}}ちゃん</a>
          @elseif($baby->gender == "no comment")
            <!--性別が選択されていない場合 -->
            <a href="#" class="none">{{$baby->nickname}}ちゃん</a>
          @endif
        @endforeach
      </div>
      <div class="create_baby">
        <a href="kidform">新規登録</a>
      </div>
    </div>
  </div>

  <div class="top-wrapper">
    <div class="top-box">
      <div class="box">
        <img src="img/boybaby.png" alt="">
      </div>
    </div>
  </div>

  <div class="main-wrapper">
    <div class="heading">
      <h1>✳︎ ◯歳 ◯ヶ月 ✳︎</h1>
    </div>
    <div class="baby-details">
      <div class="graph">
        <h2>グラフ</h2>
        <img src="img/graph.png" alt="">
      </div>
      <div class="details">
        <!-- 配列開始 -->
        <div class="detail">
          <h2>検診結果</h2>
          <p>最新の結果詳細<br>
            <!-- ここに配列 -->
          </p>
          <div class="detail-button">
            <a href="babycheckups">一覧ページ</a>
          </div>
        </div>
        <div class="detail">
          <h2>予防接種</h2>
          <p>最新の結果詳細<br>
            <!-- ここに配列 -->
          </p>
          <div class="detail-button">
            <a href="vaccination">一覧ページ</a>
          </div>
        </div>
        <!-- 配列閉じる-->
      </div>
    </div>
  </div>

  <div class="button-wrapper">
    <div class="buttons">
      <button><a href="#">カレンダー</a></button>
      <button><a href="{{route('albums.index')}}">アルバム一覧</a></button>
      <button><a href="#">成長の記録</a></button>
      <button><a href="mommy">ママページに戻る</a></button>
    </div>
  </div>

  <footer>
  </footer>
</body>
</html>

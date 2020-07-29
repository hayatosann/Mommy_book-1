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
        <a href="{{route('babies.create')}}">新規登録</a>
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
      <h1>✳︎生後:{{$age}}✳︎</h1>
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
            <!-- {{--@foreach($baby_checkups->baby_checkup)--}} -->
            検査年月日:<!-- 検査年月日 -->
            体重:<!-- 体重 -->㎏<br>
            身長:<!-- 身長 -->cm<br>
            胸囲:<!-- 胸囲 -->cm<br>
            頭囲:<!-- 頭囲 -->cm<br>
            栄養状態:<!-- 栄養状態 --><br>
            栄養方法:<!-- 栄養方法 --><br>
            目の異常:<!-- 目の異常 --><br>
            耳の異常:<!-- 耳の異常 --><br>
            要治療虫歯:<!-- 要治療虫歯 --><br>
            歯のよごれ:<!-- 歯のよごれ --><br>
            歯肉・粘膜:<!-- 歯肉・粘膜 --><br>
            不正咬合:<!-- 不正咬合 --><br>
            歯・口腔の疾病異常:<!-- 歯・口腔の疾病異常 --><br>
            生え変わり:<!-- 生え変わり -->本<br>
            健康・要観察:<!-- 健康・要観察 --><br>
            指導事項:<!-- 指導事項 --><br>
            施設名/担当者名:<!-- 施設名/担当者名 --><br>
          </p>
          <div class="detail-button">
            <a href="babycheckups">一覧ページ</a>
          </div>
        </div>
        <div class="detail">
          <h2>予防接種</h2>
          <p>最新の結果詳細<br>
            @foreach($vaccines as $vaccine)
                ワクチン名: {{$vaccine->name}}<br>
                接種年月日: {{$vaccine->shot_date}}<br>
                注射部位: {{$vaccine->shot_place}}<br>
                実施者名: {{$vaccine->physician_sign}}<br>
                反応: {{$vaccine->react}}mm<br>
                判定: {{$vaccine->result}}<br>
                病院名: {{$vaccine->hospital_name}}<br>
                メーカー/ロット: {{$vaccine->manufacture_lot}}<br>
                備考: {{$vaccine->remarks}}><br>
            @endforeach
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
      <button><a href="{{route('mommies.index')}}">ママページに戻る</a></button>
    </div>
  </div>

  <footer>
  </footer>
</body>
</html>

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
        <h1>{{$month}}</h1>
        <!-- <h1>おめでとう</h1> -->
        <form action="{{route('mommies.update',[1])}}" method="post">
            @csrf
            @method('put')
            <input type="hidden" name="status">
            <button>{{$btn}}</button>
        </form>
    </div>
    </div>
  </div>

  <div class="main-wrapper">
    <div class="heading">
      <h1>✳︎{{$week}}✳︎</h1>
    </div>
    <div class="mommy-details">
      <div class="detail">
        <h2>グラフ</h2>
        <img src="img/graph.png" alt="">
      </div>
      <div class="detail">
        <h2>検診結果</h2>
        <p>最新の結果詳細<br>
        @foreach($maternity_checkups as $maternity_checkup)
          検査年月日: {{$maternity_checkup->date}}<br>
          妊娠週数: {{$maternity_checkup->pregnancy_week}}<br>
          子宮底調: {{$maternity_checkup->fundal_height}}cm<br>
          体重: {{$maternity_checkup->weight}}㎏<br>
          腹囲: {{$maternity_checkup->abdominal_circumference}}cm<br>
          血圧: {{$maternity_checkup->blood_pressure}}<br>
          浮腫: {{$maternity_checkup->edema}}<br>
          尿蛋白: {{$maternity_checkup->urinal_protein}}<br>
          尿糖: {{$maternity_checkup->urinal_sugar}}<br>
          備考欄: {{$maternity_checkup->note}}<br>
        @endforeach
        </p>
        <div class="detail-button">
          <a href="{{route('maternity_checkups.index')}}">一覧ページ</a>
        </div>
      </div>
    </div>
  </div>

  <div class="button-wrapper">
    <div class="buttons">
      <button><a href="{{route('maternity_checkups.create')}}">検診結果入力</a></button>
      <button><a href="{{route('babies.index')}}">赤ちゃんページ</a></button>
      <button><a href="#">カレンダー</a></button>
      <button><a href="#">子育て情報一覧</a></button>
    </div>
  </div>

  <footer>
  </footer>
</body>
</html>

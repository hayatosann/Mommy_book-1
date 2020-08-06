<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>baby</title>
  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('/assets/css/baby.css')}}">
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
        @foreach($kids as $kid)
          <!-- 条件分岐 -->
          @if($kid->gender == "男性")
          {{-- <a href="{{route('babies.edit', $kid->id)}}"></a> --}}
            <form action="{{route('babies.show', $kid->id)}}" post="get">
            {{-- @csrf
            @method('put') --}}
            <button >{{$kid->nickname}}くん</button>
            </form>
          @elseif($kid->gender == "女性")
            {{-- <a href="{{route('babies.edit', $kid->id)}}" class="girl"></a> --}}
            <form action="{{route('babies.show', $kid->id)}}" post="get">
            {{-- @csrf
            @method('put') --}}
            <button class="girl">{{$kid->nickname}}ちゃん</button>
            </form>
          @elseif($kid->gender == "no comment")
            <!--性別が選択されていない場合 -->
            <!-- <a href="{{route('babies.edit', $kid->id)}}" class="none"></a> -->
            <form action="{{route('babies.edit', $kid->id)}}" post="method">
            @csrf
            @method('put')
            <button class="none">{{$kid->nickname}}ちゃん</button>
            </form>
          @endif
        @endforeach
        </form>
      </div>
      <div class="create_baby">
        <a href="{{route('babies.create')}}">新規登録</a>
      </div>
    </div>
  </div>

  <div class="top-wrapper">
    <div class="top-box">
      <div class="box">
        <img src="{{ asset('/img/boybaby.png') }}" alt="">
        {{-- <img src="img/boybaby.png" alt=""> --}}
      </div>
    </div>
  </div>

  <div class="main-wrapper">
    <div class="heading">
    <!-- 年齢を表示 -->
    <h1>✳︎{{$age}}✳︎</h1>
    </div>
    <div class="baby-details">
      <div class="graph">
        <h2>グラフ</h2>
        <img src="{{ asset('/img/graph.png') }}" alt="">
        {{-- <img src="img/graph.png" alt=""> --}}
      </div>
      <div class="details">
        <div class="detail">
          <h2>検診結果</h2>
          <p>最新の結果詳細<br>
          @if (isset($baby_checkup))
            検査年月日:{{$baby_checkup->date}}<br>
            体重:{{$baby_checkup->weight}}g<br>
            身長:{{$baby_checkup->height}}cm<br>
            胸囲:{{$baby_checkup->chest}}cm<br>
            頭囲:{{$baby_checkup->head}}cm<br>
            栄養状態:{{$baby_checkup->nutritional_status}}<br>
            栄養方法:{{$baby_checkup->food}}<br>
            目の異常:{{$baby_checkup->eyes_disease}}<br>
            耳の異常:{{$baby_checkup->ears_disease}}<br>
            要治療虫歯:{{$baby_checkup->baby_tooth->teeth_decay}}<br>
            歯のよごれ:{{$baby_checkup->baby_tooth->clearness}}<br>
            歯肉・粘膜:{{$baby_checkup->baby_tooth->gingival_mucous}}<br>
            不正咬合:{{$baby_checkup->baby_tooth->teeth_allignment}}<br>
            歯・口腔の疾病異常:{{$baby_checkup->baby_tooth->oral_disease}}<br>
            生え変わり:{{$baby_checkup->baby_tooth->replaced_teeth}}本<br>
            健康・要観察:{{$baby_checkup->checkups}}<br>
            指導事項:{{$baby_checkup->guidance}}<br>
            施設名/担当者名:{{$baby_checkup->supervisor_name}}<br>
          @endif
          </p>
          <div class="detail-button">
            <a href="{{route('baby_checkups.index')}}">一覧ページ</a>
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
                反応: {{$vaccine->react}}<br>
                判定: {{$vaccine->result}}<br>
                病院名: {{$vaccine->hospital_name}}<br>
                メーカー/ロット: {{$vaccine->manufacture_lot}}<br>
                備考: {{$vaccine->remarks}}<br>
            @endforeach
          </p>
          <div class="detail-button">
            <a href="{{route('vaccines.index')}}">一覧ページ</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="button-wrapper">
    <div class="buttons">
      <button><a href="#">カレンダー</a></button>
      <button><a href="{{route('babies.albums.index', $id)}}">アルバム一覧</a></button>
      <button><a href="#">成長の記録</a></button>
      <button><a href="{{route('mommies.index')}}">ママページに戻る</a></button>
    </div>
  </div>

  <footer>
  </footer>
</body>
</html>

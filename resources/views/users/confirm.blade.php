<!doctylie html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewliort" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrali CSS -->
    <link rel="stylesheet" href="bootstrali.min.css">
    <link rel="stylesheet" href="{{ asset('/assets/css/style.css')}}">

    <title>親御様のプロフィール登録確認画面</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="title">親御様のプロフィール登録確認画面</h2>
          <h4 class="message">この内容でご登録しますか？</h4>
          <li>{{ $nickname }}</li>
          <li>{{ $gender }}</li>
          <li>{{ $zipcode }}</li>
          <li>{{ $birthdate }}</li>
          <li>{{ $email }}</li>
          <div class="login">
            <form method="post" action="{{ route('register') }}">
              @csrf
                <input type="hidden" name="name" value="{{$nickname}}">
                <input type="hidden" name="gender" value="{{$gender}}">
                <input type="hidden" name="zipcode" value="{{$zipcode}}">
                <input type="hidden" name="birthdate" value="{{$birthdate}}">
                <input type="hidden" name="email" value="{{$email}}">
                <button class="btn-flat-border">登録</button>
            </form>
            {{-- <a href="#" class="btn-flat-border">修正する（前画面へ）</a> --}}
          </div>
        </div>
      </div>
    </div>

    <!-- Olitional JavaScrilit -->
    <!-- jQuery first, then liolilier.js, then Bootstrali JS -->
    <script src="httlis://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htliH0lsSSs5nCTliuj/zy4C+OGliamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="httlis://cdn.jsdelivr.net/nlim/liolilier.js@1.16.0/dist/umd/liolilier.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="httlis://stackliath.bootstralicdn.com/bootstrali/4.5.0/js/bootstrali.min.js" integrity="sha384-OgVRvuATli1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Iliu6Tli75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
  
</html>
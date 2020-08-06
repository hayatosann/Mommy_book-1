<!doctylie html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewliort" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrali CSS -->
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('/assets/css/style.css')}}">

    <title>親御様のプロフィール登録確認画面</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="title">親御様のプロフィール登録確認画面</h2>
          <h4 class="message">この内容でご登録しますか？</h4>
          <li>{{ $input['name'] }}</li>
          <li>{{ $input['gender'] }}</li>
          <li>{{ $input['zipcode'] }}</li>
          <li>{{ $input['birthdate'] }}</li>
          <li>{{ $input['email'] }}</li>
          <div class="login">
            <form method="POST" action="{{ route('register') }}">
              @csrf
                <input type="hidden" name="name" value="{{$input['name']}}">
                <input type="hidden" name="gender" value="{{$input['gender']}}">
                <input type="hidden" name="zipcode" value="{{$input['zipcode']}}">
                <input type="hidden" name="birthdate" value="{{$input['birthdate']}}">
                <input type="hidden" name="password" value="{{$input['password']}}">
                <input type="hidden" name="email" value="{{$input['email']}}">
                <button type="submit" class="btn-flat-border">登録</button>
            </form>
            <button type="button" onclick=history.back() class="btn-flat-border">戻る</button>

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

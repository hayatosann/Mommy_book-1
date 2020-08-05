<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('/assets/css/style.css')}}">

    <title>おなかの赤ちゃん＆お子様（ご兄弟）のプロフィール登録</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-12 center">
          <h2 class="title">おなかの赤ちゃん＆お子様（ご兄弟）のプロフィール登録</h2>
          <h4 class="message">この内容でご登録しますか？</h4>
          <!-- <form method="post" action=""> -->
            <!-- @csrf -->
            <div class="confirm">
              <ul>
                <li>お名前:{{$nickname}}</li><br>
                <li>性別:{{$gender}}</li><br>
                <li>ご生年月日:{{$birthdate}}</li><br>
              </ul>
            </div>
            <form action="{{route('babies.store')}}" method="post">
            @csrf
            <input type="hidden" name="nickname" value="{{$nickname}}">
            <input type="hidden" name="gender" value="{{$gender}}">
            <input type="hidden" name="birthdate" value="{{$birthdate}}">
            <button class="btn-flat-border" id="complete">確認完了</button>
            </form>
            <form action="{{route('babies.sinbling')}}" method="post">
            @csrf
            <input type="hidden" name="nickname" value="{{$nickname}}">
            <input type="hidden" name="gender" value="{{$gender}}">
            <input type="hidden" name="birthdate" value="{{$birthdate}}">
            <button class="btn-flat-border" id="register">確認次のお子様の登録</button>
            </form>
          <!-- <div class="login">
              
          </div> -->
        </div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <!-- <script type="text/javascript" src="{{asset('assets/js/form.js')}}"></script> -->
  </body>
</html>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/CSS/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('/assets/css/style.css')}}">

    <title>おなかの赤ちゃん＆お子様（ご兄弟）のプロフィールご登録</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="title">おなかの赤ちゃん＆お子様（ご兄弟）のプロフィールご登録</h2>
            @if($errors->any())
                <ul>
                    @foreach($errors->all() as $message)
                       <li style="color:red">{{$message}}</li>
                    @endforeach
                </ul>
            @endif
          <form action ="{{route('babies.confirm')}}" method="post">
              @csrf
            <div class="form-group">
              <label>お名前</label>
              <input type="text" class="form-control" placeholder="お名前（ニックネーム" name="nickname">
            </div>
            <div class="form-group">
              <label>性別</label>
              <div class="button">
                <input type="text" class="female" id= "gender"  value="女性" readonly></input>
                <input type="text" class="male" id= "gender"  value="男性" readonly></input>
                <input type="text" class="none" id="gender"  value="no comment" readonly></input>
               </div>
            </div>
            <div class="form-group">
              <label>ご生年月日</label>
              <input type="date" cphp artisan elass="form-control" width="200px" placeholder="カレンダー" id="datepicker" name="birthdate">
            </div>
            <div class="login">
              <button type="submit" class="btn-flat-border">入力完了</button>
            </div>
          </form>

        </div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{asset('assets/js/gender.js')}}"></script>
  </body>
</html>

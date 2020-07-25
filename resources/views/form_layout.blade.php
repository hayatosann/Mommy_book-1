<!-- 登録・編集画面のview テンプレート -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('/assets/css/form.css')}}">
    <title>@yield('title')</title>
</head>
<body>
   <header>
       <div class="header_center">
            <h1>@yield('title')</h1>
       </div>
   </header>
   <main>
        <!-- <form action="" class="" method=""> -->
            @yield('form')
            @csrf
            <div class="container_btn">
                <div class="wrapper">
                    <div class="wrapper_upper">
                        <h2>@yield('subtitle')</h2>
                    </div>
                    <div class="wrapper_lists">
                        <ul class="lists_title">
                            @yield('lists')
                        </ul>
                    </div>
                        <!-- 登録・編集ボタン -->
                    <div class="wrapper_bottom">
                        <div class="btn_create">
                                <button type="submit" class="register">登録</button>
                        </div>
                        <div class="btn_edit">
                                <!-- <button type="submit" class="edit">編集</button> -->
                        </div>
                    </div>
                </div>
            </div>
        </form>
    <footer>
    <!-- 完了ボタン -->
        <div class="container_back">
            <div class="btn_back">
                <!-- <button class="back">完了</button>-->
                @yield('back')
            </div>
        </div>
    </footer>
   </main>
</body>
</html>


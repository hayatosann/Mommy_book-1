<!-- 一覧表示画面のviewテンプレート -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('/assets/css/display.css')}}">
    <title>@yield('title')</title>
    </head>
<body>
   <header>
       <div class="header_center">
            <h1>@yield('title')</h1>
       </div>
   </header>
   <main>
        <div class="container_btn">
            <div class="wrapper">
                <div class="wrapper_upper">
                    <h2>@yield('subtitle')</h2>
                </div>
                 <!-- 登録・編集ボタン -->
                <div class="wrapper_bottom">
                    <div class="btn_create">
                        <!-- <button class="register">登録</button> -->
                        @yield('register')
                    </div>
                </div>
            </div>
        </div>
        <div class="container_display">
            <!-- 以下一覧表示 繰り返し-->
            <!-- <div class="wrapper_display"> -->
                <!-- <div class="wrapper_lists"> -->
                    <!-- <ul class="lists_title"> -->
                        @yield('lists')
                    <!-- </ul> -->
                     <!-- <div class="btn_edit"> -->
                        <!-- <button class="edit">編集</button> -->
                        <!-- @yield('edit') -->
                        <!-- @yield('form') -->
                             <!-- @csrf
                            @method('delete')
                             <button class="delete">削除</button>
                        </form>
                    </div>
                </div>
            </div> -->
            <!-- 一覧表示 繰り返しここまで -->
        </div>
   </main>
   <footer>
        <!-- 戻るボタン -->
        <div class="container_back">
            <div class="btn_back">
                <!-- <button class="back">戻る</button> -->
                @yield('back')
            </div>
        </div>
   </footer>
</body>
</html>

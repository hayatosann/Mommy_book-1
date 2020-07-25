<!-- 予防接種一覧表示画面 -->
@extends('read_layout')

@section('title')
予防接種
@endsection

@section('subtitle')
予防接種詳細
@endsection

@section('register')
<a href="vaccination_form" class="register">登録</a>
@endsection

@section('lists')
<div class="wrapper_display">
    <div class="wrapper_lists">
        <ul class="lists_title">
            <li>ワクチン名:<!-- ワクチン名 --></li>
            <li>接種年月日:<!-- 接種年月日 --></li>
            <li>注射部位:<!-- 注射部位 --></li>
            <li>実施者名:<!-- 実施者名 --></li>
            <li>反応:<!-- 反応 -->mm</li>
            <li>判定:<!-- 判定 --></li>
            <li>病院名:<!-- 病院名 --></li>
            <li>メーカー/ロット:<!-- メーカー・ロット --></li>
            <li>備考:<!-- 備考 --></li>
        </ul>
        <div class="btn_edit">
            <!-- 編集ボタン -->
            <a href="" class="edit">編集</a>
            <!-- 削除ボタン -->
            <form action="" method="">
                    <button class="delete">削除</button>
            </form>
        </div>
    </div>
</div>
@endsection


@section('back')
<a href="" class="back">戻る</a>
@endsection

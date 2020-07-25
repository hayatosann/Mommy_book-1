<!-- 赤ちゃん健診一覧表示画面 -->
@extends('read_layout')

@section('title')
赤ちゃん検診
@endsection

@section('subtitle')
検診結果
@endsection

<!-- 登録ボタンでのページ遷移 -->
@section('register')
<a href="babycheckups_form" class="register">登録</a>
@endsection

@section('lists')
<div class="wrapper_display">
    <div class="wrapper_lists">
        <ul class="lists_title">
            <li>検査年月日:<!-- 検査年月日 --></li>
            <li>体重:<!-- 体重 -->㎏</li>
            <li>身長:<!-- 身長 -->cm</li>
            <li>胸囲:<!-- 胸囲 -->cm</li>
            <li>頭囲:<!-- 頭囲 -->cm</li>
            <li>栄養状態:<!-- 栄養状態 --></li>
            <li>栄養方法:<!-- 栄養方法 --></li>
            <li>目の異常:<!-- 目の異常 --></li>
            <li>耳の異常:<!-- 耳の異常 --></li>
            <li>要治療虫歯:<!-- 要治療虫歯 --></li>
            <li>歯のよごれ:<!-- 歯のよごれ --></li>
            <li>歯肉・粘膜:<!-- 歯肉・粘膜 --></li>
            <li>不正咬合:<!-- 不正咬合 --></li>
            <li>歯・口腔の疾病異常:<!-- 歯・口腔の疾病異常 --></li>
            <li>生え変わり:<!-- 生え変わり -->本</li>
            <li>健康・要観察:<!-- 健康・要観察 --></li>
            <li>指導事項:<!-- 指導事項 --></li>
            <li>施設名/担当者名:<!-- 施設名/担当者名 --></li>
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

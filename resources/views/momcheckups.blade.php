<!-- 妊婦健診の一覧表示画面 -->
@extends('read_layout')

@section('title')
妊婦健診
@endsection

@section('subtitle')
検診結果
@endsection

@section('register')
<a href="momcheckups_form" class="register">登録</a>
@endsection

@section('lists')
<li>検査年月日:<!-- 検査年月日 --></li>
<li>妊娠週数:<!-- 週数 -->週</li>
<li>子宮底調:<!-- 子宮底調 -->cm</li>
<li>体重:<!-- 体重 -->㎏</li>
<li>腹囲:<!-- 腹囲 -->cm</li>
<li>血圧:<!-- 血圧 --></li>
<li>浮腫:<!-- 浮腫 --></li>
<li>尿蛋白:<!-- 尿蛋白 --></li>
<li>尿糖:<!-- 尿糖 --></li>
<li>備考欄:<!-- 備考 --></li>
@endsection

@section('edit')
<a href="" class="edit">編集</a>
@endsection

@section('back')
<a href="" class="back">戻る</a>
@endsection

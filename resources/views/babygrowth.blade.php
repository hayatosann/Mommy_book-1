<!-- 胎児進捗の一覧表示画面 -->
@extends('read_layout')

@section('title')
子どもの成長
@endsection

@section('subtitle')
成長の記録
@endsection

@section('register')
<a href="babygrowth_form" class="register">登録</a>
@endsection

@section('lists')
<li><img src="" alt="エコー写真?"></li>
<li>日付: <!-- ○○○○年○○月○○日--></li>
<li>成長の記録:</li>
@endsection

@section('edit')
<a href="" class="edit">編集</a>
@endsection

@section('back')
<a href="" class="back">戻る</a>
@endsection

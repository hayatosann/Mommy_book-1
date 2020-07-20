<!-- 子どもの成長登録・編集画面 -->
@extends('form_layout')

@section('title')
子どもの成長
@endsection

@section('subtitle')
成長の記録
@endsection

@section('lists')
<li>写真：<span><input type="file"></span></li>
<li>日付: <span><input type="date"></span></li>
<li>成長の記録: <span><input type="textarea"></span></li>
@endsection

@section('back')
<a href="" class="back">完了</a>
@endsection

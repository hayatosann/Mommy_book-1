<!-- 子どもの成長登録画面 -->
@extends('form_layout')

@section('title')
子どもの成長
@endsection

@section('subtitle')
成長の記録
@endsection

@section('form')
<form action="{{route('albums.store')}}" class="" method="post" enctype="multipart/form-data">
@endsection

@section('lists')
<li>写真：<span><input type="file" name = "image"></span></li>
<li>日付: <span><input type="date" name = "date"></span></li>
<li>成長の記録: <span><input type="textarea" name = "record" ></span></li>
@endsection

@section('back')
<a href="" class="back">完了</a>
@endsection

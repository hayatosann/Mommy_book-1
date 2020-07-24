<!-- 子どもの成長編集画面 -->
@extends('form_layout')

@section('title')
子どもの成長
@endsection

@section('subtitle')
成長の記録
@endsection

@section('form')
<form action="{{route('albums.update', [$album->id])}}" class="" method="post">
@csrf
@method('put')
@endsection

@section('lists')
<li>写真：<span><input type="file" name = "image" value=""><img src="{{old('image', $album->img)}}" multiple></span></li>
<li>日付: <span><input type="date" name = "date" value="{{old('date', $album->date)}}"> </span></li>
<li>成長の記録: <span><input type="textarea" name = "record" value=" {{old('record', $album->record)}}"></span></li>
@endsection

@section('back')
<a href="" class="back">完了</a>
@endsection

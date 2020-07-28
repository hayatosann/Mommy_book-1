<!-- 胎児進捗の一覧表示画面 -->
@extends('read_layout')

@section('title')
子どもの成長
@endsection

@section('subtitle')
成長の記録
@endsection

@section('register')
<a href="{{route('albums.create')}}" class="register">登録</a>
@endsection

@section('lists')
@foreach($albums as $album)
<div class="wrapper_display">
    <div class="wrapper_lists">
        <ul class="lists_title">
            <li><img src="{{$album->img}}" alt=""></li>
            <li>日付: {{$album->date}}</li>
            <li>成長の記録:{{$album->record}}</li>
        </ul>
        <div class="btn_edit">
            <a href="{{route('albums.edit', $album->id)}}" class="edit">編集</a>
            <form action="{{ route('albums.destroy', $album->id)}}" method="post">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <button class="delete">削除</button>
            </form>
        </div>
    </div>
</div>
@endforeach
@endsection

@section('back')
<a href="{{route('babies.index')}}" class="back">戻る</a>
@endsection

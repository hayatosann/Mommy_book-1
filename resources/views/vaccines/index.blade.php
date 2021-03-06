<!-- 予防接種一覧表示画面 -->
@extends('read_layout')

@section('title')
予防接種
@endsection

@section('subtitle')
予防接種詳細
@endsection

@section('register')
<a href="{{ route('babies.vaccines.create', $id)}}" class="register">登録</a>
@endsection

@section('lists')
@if($vaccines !== null)
@foreach($vaccines as $vaccine)
<div class="wrapper_display">
    <div class="wrapper_lists">
        <ul class="lists_title">
            <li>ワクチン名:{{$vaccine->name}}</li>
            <li>接種年月日:{{$vaccine->shot_date}}</li>
            <li>注射部位:{{$vaccine->shot_place}}</li>
            <li>実施者名:{{$vaccine->physician_sign}}</li>
            <li>反応:{{$vaccine->react}}mm</li>
            <li>判定:{{$vaccine->result}}</li>
            <li>病院名:{{$vaccine->hospital_name}}</li>
            <li>メーカー/ロット:{{$vaccine->manufacture_lot}}</li>
            <li>備考:{{$vaccine->remarks}}</li>
        </ul>
        <div class="btn_edit">
            <!-- 編集ボタン -->
            <a href="{{ route('babies.vaccines.edit', [$id, $vaccine->id])}}" class="edit">編集</a>
            <!-- 削除ボタン -->
            <form action="{{ route('babies.vaccines.destroy', [$id, $vaccine->id])}}" method="post">
            @csrf
            @method('delete')
                    <button class="delete">削除</button>
            </form>
        </div>
    </div>
</div>
@endforeach
@endif
@endsection


@section('back')
<a href="{{route('babies.show', $id)}}" class="back">戻る</a>
@endsection

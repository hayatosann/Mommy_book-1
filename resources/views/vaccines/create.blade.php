<!-- 予防接種登録・編集画面 -->
@extends('form_layout')

@section('title')
予防接種
@endsection

@section('subtitle')
予防接種詳細
@endsection

<!-- 登録ボタンのフォーム -->
@section('form')
<form action="{{ route('vaccines.store') }}" method="post">
@endsection

@section('lists')
<li>ワクチン名: <span><input type="text" name="name"></span></li>
<li>接種年月日: <span><input type="date" name="shot_date"></span></li>
<!-- <li>注射部位:
    <span>
        <ul>
            <li><input type="checkbox" value="null">✖ツベルクリン反応</input></li>
            <li><input type="checkbox" value="left">左</input></li>
            <li><input type="checkbox" value="right">右</input></li>
            <li><input type="checkbox" value="upper">上</input></li>
            <li><input type="checkbox" value="middle">中</input></li>
            <li?><input type="checkbox" value="lower">下</input></li>
        </ul>

    </span>
</li> -->
<li>実施者名: <span><input type="text" name="physician_sign"></span></li>
<li>反応: <span><input type="number" name="react"></span> mm</li>
<li>判定:
    <span>
        <select name="result" id="">
            <option value="null"></option>
            <option value="no">ツベルクリン反応検査ではない</option>
            <option value="plus">+</option>
            <option value="minus">-</option>
        </select>
    </span>
</li>
<li>病院名: <span><input type="text" name="hospital_name"></span></li>
<li>メーカー/ロット: <span><input type="text" name="manufacture_lot"></span></li>
<li>備考: <span><input type="textarea" name="remarks"></span></li>
@endsection

@section('back')
<a href="" class="back">完了</a>
@endsection

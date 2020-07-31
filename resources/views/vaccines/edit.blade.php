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
<form action="{{ route('vaccines.update', [$vaccine->id]) }}" method="post">
@csrf
@method('put')
@endsection

@section('lists')
<li>ワクチン名: <span><input type="text" name="name" value="{{ old('name', $vaccine->name) }}"></span></li>
<li>接種年月日: <span><input type="date" name="shot_date" value="{{ old('shot_date', $vaccine->shot_date) }}"></span></li>
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
<li>実施者名: <span><input type="text" name="physician_sign" value="{{ old('physician_sign', $vaccine->physician_sign) }}"></span></li>
<li>反応: <span><input type="number" name="react" value="{{ old('react', $vaccine->react) }}"></span> mm</li>
<li>判定:
    <span>
        <select name="result" id="result">
            <option {{ old('result', $vaccine->result) == 'null' ? 'selected' : '' }} value="null"></option>
            <option {{ old('result', $vaccine->result) == 'no' ? 'selected' : '' }} value="no">ツベルクリン反応検査ではない</option>
            <option {{ old('result', $vaccine->result) == 'plus' ? 'selected' : '' }} value="plus">+</option>
            <option {{ old('result', $vaccine->result) == 'minus' ? 'selected' : '' }} value="minus">-</option>
        </select>
    </span>
</li>
<li>病院名: <span><input type="text" name="hospital_name" value="{{ old('hospital_name', $vaccine->hospital_name) }}"></span></li>
<li>メーカー/ロット: <span><input type="text" name="manufacture_lot" value="{{ old('manufacture_lot', $vaccine->manufacture_lot) }}"></span></li>
<li>備考: <span><input type="textarea" name="remarks" value="{{ old('remarks', $vaccine->remarks) }}"></span></li>
@endsection

@section('back')
<a href="" class="back">完了</a>
@endsection

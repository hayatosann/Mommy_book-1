<!-- 妊婦健診の登録・編集画面 -->
@extends('form_layout')

@section('title')
妊婦健診
@endsection

@section('subtitle')
検診結果
@endsection

@section('form')
<form action="{{route('maternity_checkups.update',[$maternity_checkup->id])}}" class="" method="post">
@csrf
@method('put')
@endsection

@section('lists')
<li>検査年月日: <span><input type="date" name="date" id="date" value="{{ old('date', $maternity_checkup->date) }}"></span></li>
<li>妊娠週数: <span><input type="number" name="pregnancy_week" id="pregnancy_week" value="{{ old('pregnancy_week', $maternity_checkup->pregnancy_week) }}"></span> 週</li>
<li>子宮底調: <span><input type="number" name="fundal_height" id="fundal_height" value="{{ old('fundal_height', $maternity_checkup->fundal_height) }}"></span> cm</li>
<li>体重: <span><input type="text" name="weight" id="weight" value="{{ old('weight', $maternity_checkup->weight) }}"></span> ㎏</li>
<li>腹囲: <span><input type="number" name="abdominal_circumference" id="abdominal_circumference" value="{{ old('abdominal_circumference', $maternity_checkup->abdominal_circumference) }}"></span> cm</li>
<li>血圧: <span><input type="number" name="blood_pressure" id="blood_pressure" value="{{ old('blood_pressure', $maternity_checkup->blood_pressure) }}"></span></li>
<li>浮腫:
    <span>
        <select name="edema" id="edema">
            <option {{ old('edema', $maternity_checkup->edema) == 'none' ? 'selected' : '' }}></option>
            <option {{ old('edema', $maternity_checkup->edema) == 'mainus' ? 'selected' : '' }} value="mainus">-</option>
            <option {{ old('edema', $maternity_checkup->edema) == 'plus' ? 'selected' : '' }} value="plus">+</option>
            <option {{ old('edema', $maternity_checkup->edema) == 'two_plus' ? 'selected' : '' }} value="two_plus">++</option>
        </select>  
    </span>
</li>
<li>尿蛋白:
    <span>
        <select name="urinal_protein" id="urinal_protein">
            <option {{ old('urinal_protein', $maternity_checkup->urinal_protein) == 'none' ? 'selected' : '' }} value="none"></option>
            <option {{ old('urinal_protein', $maternity_checkup->urinal_protein) == 'mainus' ? 'selected' : '' }} value="mainus">-</option>
            <option {{ old('urinal_protein', $maternity_checkup->urinal_protein) == 'plus' ? 'selected' : '' }} value="plus">+</option>
            <option {{ old('urinal_protein', $maternity_checkup->urinal_protein) == 'two_plus' ? 'selected' : '' }} value="two_plus">++</option>
        </select>
    </span>
</li>
<li>尿糖:
    <span>
        <select name="urinal_sugar" id="urinal_sugar" >
            <option {{ old('urinal_sugar', $maternity_checkup->urinal_sugar) == 'none' ? 'selected' : '' }} value="none"></option>
            <option {{ old('urinal_sugar', $maternity_checkup->urinal_sugar) == 'mainus' ? 'selected' : '' }} value="mainus">-</option>
            <option {{ old('urinal_sugar', $maternity_checkup->urinal_sugar) == 'plus' ? 'selected' : '' }} value="plus">+</option>
            <option {{ old('urinal_sugar', $maternity_checkup->urinal_sugar) == 'two_plus' ? 'selected' : '' }} value="two_plus">++</option>
        </select>
    </span>
</li>
<li>備考欄: <span><input type="textarea" name="note" id="note" value="{{ old('note', $maternity_checkup->note) }}"></span></li>
@endsection

@section('back')
<a href="" class="back">完了</a>
@endsection

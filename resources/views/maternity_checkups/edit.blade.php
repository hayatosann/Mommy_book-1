<!-- 妊婦健診の登録・編集画面 -->
@extends('form_layout')

@section('title')
妊婦健診
@endsection

@section('subtitle')
検診結果
@endsection

@section('form')
<form action="{{route('maternity_checkups.update')}}" class="" method="post">
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
        <select name="edema" id="edema" value="{{ old('edema', $maternity_checkup->edema) }}">
            <option class="sample" {{ old($maternity_checkup->edema) == '' ? 'selected' : '' }} value=""></option>
            <option class="sample" value="mainus">-</option>
            <option class="sample" value="plus">+</option>
            <option class="sample" value="two_plus">++</option>
        </select>
        <script>
            var edema = document.getElementById('edema');
            var value = edema.getAttribute('value');
            var eles = document.getElementsByClassName('sample');
            for (ele of eles){
                var input = ele.getAttribute('value');
                if (input == value) {
                    ele.setAttribute("selected");
                    console.log(ele);
                }
            }
        </script>
    </span>
</li>
<li>尿蛋白:
    <span>
        <select name="urinal_protein" >
            <option value="none"></option>
            <option value="mainus">-</option>
            <option value="plus">+</option>
            <option value="two_plus">++</option>
        </select>
    </span>
</li>
<li>尿糖:
    <span>
        <select name="urinal_sugar" >
            <option value="none"></option>
            <option value="mainus">-</option>
            <option value="plus">+</option>
            <option value="two_plus">++</option>
        </select>
    </span>
</li>
<li>備考欄: <span><input type="textarea" name="note" id="note" value="{{ old('note', $maternity_checkup->note) }}"></span></li>
@endsection

@section('back')
<a href="" class="back">完了</a>
@endsection

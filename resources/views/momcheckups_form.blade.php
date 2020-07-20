<!-- 妊婦健診の登録・編集画面 -->
@extends('form_layout')

@section('title')
妊婦健診
@endsection

@section('subtitle')
検診結果
@endsection

@section('lists')
<li>検査年月日: <span><input type="date"></span></li>
<li>妊娠週数: <span><input type="number"></span> 週</li>
<li>子宮底調: <span><input type="number"></span> cm</li>
<li>体重: <span><input type="text"></span> ㎏</li>
<li>腹囲: <span><input type="number"></span> cm</li>
<li>血圧: <span><input type="number"></span></li>
<li>浮腫:
    <span>
        <select name="edema" id="">
            <option value="none"></option>
            <option value="mainus">-</option>
            <option value="plus">+</option>
            <option value="two_plus">++</option>
        </select>
    </span>
</li>
<li>尿蛋白:
    <span>
        <select name="urinal_protein" id="">
            <option value="none"></option>
            <option value="mainus">-</option>
            <option value="plus">+</option>
            <option value="two_plus">++</option>
        </select>
    </span>
</li>
<li>尿糖:
    <span>
        <select name="urinal_sugar" id="">
            <option value="none"></option>
            <option value="mainus">-</option>
            <option value="plus">+</option>
            <option value="two_plus">++</option>
        </select>
    </span>
</li>
<li>備考欄: <span><input type="textarea"></span></li>
@endsection

@section('back')
<a href="" class="back">完了</a>
@endsection

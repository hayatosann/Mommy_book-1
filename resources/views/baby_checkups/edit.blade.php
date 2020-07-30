<!-- 赤ちゃん検診登録・編集画面 -->
@extends('form_layout')

@section('title')
赤ちゃん検診
@endsection

@section('subtitle')
検診結果
@endsection

@section('form')
<form action="{{route('baby_checkups.update',$baby_checkup->id)}}" method="POST">
@csrf
@method('PATCH')
@endsection

@section('lists')
<li>検査年月日:<span><input type="date" name="date" value="{{ old('date', $baby_checkup->date) }}"></span></li>
<li>体重: <span><input type="text" name="weight" value="{{ old('weight', $baby_checkup->weight) }}"></span>㎏</li>
<li>身長: <input type="text" name="height" value="{{ old('height', $baby_checkup->height) }}"></span>cm</li>
<li>胸囲: <input type="text" name="chest" value="{{ old('chest', $baby_checkup->chest) }}"></span>cm</li>
<li>頭囲: <input type="text" name="head" value="{{ old('head', $baby_checkup->head) }}"></span>cm</li>
<li>栄養状態:
    <span>
        <select name="nutritional_status" id="nutritional_status">
            <option {{ old('nutritional_status', $baby_checkup->nutritional_status) == 'null' ? 'selected' : '' }}  value="null"></option>
            <option {{ old('nutritional_status', $baby_checkup->nutritional_status) == 'good' ? 'selected' : '' }} value="good">良</option>
            <option {{ old('nutritional_status', $baby_checkup->nutritional_status) == 'caution' ? 'selected' : '' }} value="caution">要指導</option>
        </select>
    </span>
</li>
<!-- <li>栄養方法:
    <span>
        <ul>
            <li><input type="checkbox" value="">母乳</li>
            <li><input type="checkbox" value="">混合</li>
            <li><input type="checkbox" value="">人工</li>
            <li><input type="checkbox" value="">離乳開始</li>
            <li><input type="checkbox" value="">離乳未開始</li>
            <li><input type="checkbox" value="">離乳完了</li>
            <li><input type="checkbox" value="">断乳開始</li>
            <li><input type="checkbox" value="">断乳未開始</li>
            <li><input type="checkbox" value="">断乳完了</li>
            <li><input type="checkbox" value="">離乳食</li>
        </ul>
    </span>
</li> -->
<li>目の異常:
    <span>
        <select name="eyes_disease" id="">
            <option {{ old('eyes_disease', $baby_checkup->eyes_disease) == 'null' ? 'selected' : '' }} value="null"></option>
            <option {{ old('eyes_disease', $baby_checkup->eyes_disease) == 'no' ? 'selected' : '' }} value="no">なし</option>
            <option {{ old('eyes_disease', $baby_checkup->eyes_disease) == 'yes' ? 'selected' : '' }} value="yes">あり</option>
            <option {{ old('eyes_disease', $baby_checkup->eyes_disease) == 'doubt' ? 'selected' : '' }} value="doubt">疑</option>
        </select>
    </span>
</li>
<li>耳の異常:
    <span>
        <select name="ears_disease" id="">
            <option {{ old('ears_disease', $baby_checkup->ears_disease) == 'null' ? 'selected' : '' }} value="null"></option>
            <option {{ old('ears_disease', $baby_checkup->ears_disease) == 'no' ? 'selected' : '' }} value="no">なし</option>
            <option {{ old('ears_disease', $baby_checkup->ears_disease) == 'yes' ? 'selected' : '' }} value="yes">あり</option>
            <option {{ old('ears_disease', $baby_checkup->ears_disease) == 'doubt' ? 'selected' : '' }} value="doubt">疑</option>
        </select>
    </span>
</li>
<li>要治療虫歯:
    <span>
        <select name="teeth_decay" id="">
            <option {{ old('teeth_decay', $baby_checkup->baby_tooth->teeth_decay) == 'null' ? 'selected' : '' }} value="null"></option>
            <option {{ old('teeth_decay', $baby_checkup->baby_tooth->teeth_decay) == 'no' ? 'selected' : '' }} value="no">なし</option>
            <option {{ old('teeth_decay', $baby_checkup->baby_tooth->teeth_decay) == 'yes' ? 'selected' : '' }} value="yes">あり</option>
        </select>
    </span>
</li>
<li>歯のよごれ:
    <span>
        <select name="clearness" id="">
            <option {{ old('clearness', $baby_checkup->baby_tooth->clearness) == 'null' ? 'selected' : '' }} value="null"></option>
            <option {{ old('clearness', $baby_checkup->baby_tooth->clearness) == 'clear' ? 'selected' : '' }} value="clear">きれい</option>
            <option {{ old('clearness', $baby_checkup->baby_tooth->clearness) == 'usual' ? 'selected' : '' }} value="usual">普通</option>
            <option {{ old('clearness', $baby_checkup->baby_tooth->clearness) == 'dirty' ? 'selected' : '' }} value="dirty">汚い</option>
        </select>
    </span>
</li>
<li>歯肉・粘膜:
    <span>
        <select name="gingival_mucous" id="">
            <option {{ old('gingival_mucous', $baby_checkup->baby_tooth->gingival_mucous) == 'null' ? 'selected' : '' }} value="null"></option>
            <option {{ old('gingival_mucous', $baby_checkup->baby_tooth->gingival_mucous) == 'no' ? 'selected' : '' }} value="no">なし</option>
            <option {{ old('gingival_mucous', $baby_checkup->baby_tooth->gingival_mucous) == 'yes' ? 'selected' : '' }} value="yes">あり</option>
        </select>
    </span>
</li>
<li>不正咬合:
    <span>
        <select name="teeth_allignment" id="">
            <option {{ old('teeth_allignment', $baby_checkup->baby_tooth->teeth_allignment) == 'null' ? 'selected' : '' }} value="null"></option>
            <option {{ old('teeth_allignment', $baby_checkup->baby_tooth->teeth_allignment) == 'no' ? 'selected' : '' }} value="no">なし</option>
            <option {{ old('teeth_allignment', $baby_checkup->baby_tooth->teeth_allignment) == 'caution' ? 'selected' : '' }} value="caution">要注意</option>
        </select>
    </span>
</li>
<li>歯・口腔の疾病異常: <span><input type="text" name="oral_disease" value="{{ old('oral_disease', $baby_checkup->baby_tooth->oral_disease) }}"></span></li>
<li>生え変わり:  <span><input type="number" name="replaced_teeth" value="{{ old('replaced_teeth', $baby_checkup->baby_tooth->replaced_teeth) }}"></span> 本</li>
<li>健康・要観察:
    <span>
        <select name="checkups" id="">
            <option {{ old('checkups', $baby_checkup->checkups) == 'null' ? 'selected' : '' }} value="null"></option>
            <option {{ old('checkups', $baby_checkup->checkups) == 'healthy' ? 'selected' : '' }} value="healthy">健康</option>
            <option {{ old('checkups', $baby_checkup->checkups) == 'unhealthy' ? 'selected' : '' }} value="unhealthy">要観察</option>
        </select>
    </span>
</li>
<li>指導事項: <span><input type="textarea" name="guidance" value="{{ old('guidance', $baby_checkup->guidance) }}"></span></li>
<li>施設名/担当者名: <span><input type="text" name="supervisor_name" value="{{ old('supervisor_name', $baby_checkup->supervisor_name) }}"></span></li>
@endsection

@section('back')
<a href="" class="back">完了</a>
@endsection

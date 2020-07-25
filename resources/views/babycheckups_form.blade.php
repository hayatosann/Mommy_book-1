<!-- 赤ちゃん検診登録・編集画面 -->
@extends('form_layout')

@section('title')
赤ちゃん検診
@endsection

@section('subtitle')
検診結果
@endsection

<!-- 登録ボタンのフォーム -->
@section('form')
<form action=""></form>
@endsection

@section('lists')
<li>検査年月日:<span><input type="date"></span></li>
<li>体重: <span><input type="text"></span>㎏</li>
<li>身長: <input type="text"></span>cm</li>
<li>胸囲: <input type="text"></span>cm</li>
<li>頭囲: <input type="text"></span>cm</li>
<li>栄養状態:
    <span>
        <select name="nutritional_status" id="">
            <option value="null"></option>
            <option value="good">良</option>
            <option value="caution">要指導</option>
        </select>
    </span>
</li>
<li>栄養方法:
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
</li>
<li>目の異常:
    <span>
        <select name="eyes_disease" id="">
            <option value="null"></option>
            <option value="no">なし</option>
            <option value="yes">あり</option>
            <option value="doubt">疑</option>
        </select>
    </span>
</li>
<li>耳の異常:
    <span>
        <select name="ears_disease" id="">
            <option value="null"></option>
            <option value="no">なし</option>
            <option value="yes">あり</option>
            <option value="doubt">疑</option>
        </select>
    </span>
</li>
<li>要治療虫歯:
    <span>
        <select name="teeth_decay" id="">
            <option value="null"></option>
            <option value="no">なし</option>
            <option value="yes">あり</option>
        </select>
    </span>
</li>
<li>歯のよごれ:
    <span>
        <select name="clearness" id="">
            <option value="null"></option>
            <option value="clear">きれい</option>
            <option value="usual">普通</option>
            <option value="dirty">汚い</option>
        </select>
    </span>
</li>
<li>歯肉・粘膜:
    <span>
        <select name="gingival_mucous" id="">
            <option value="null"></option>
            <option value="no">なし</option>
            <option value="yes">あり</option>
        </select>
    </span>
</li>
<li>不正咬合:
    <span>
        <select name="teeth_allignment" id="">
            <option value="null"></option>
            <option value="no">なし</option>
            <option value="caution">要注意</option>
        </select>
    </span>
</li>
<li>歯・口腔の疾病異常: <span><input type="text"></span></li>
<li>生え変わり:  <span><input type="number"></span> 本</li>
<li>健康・要観察:
    <span>
        <select name="checkups" id="">
            <option value="null"></option>
            <option value="healthy">健康</option>
            <option value="unhealthy">要観察</option>
        </select>
    </span>
</li>
<li>指導事項: <span><input type="textarea"></span></li>
<li>施設名/担当者名: <span><input type="text"></span></li>
@endsection

@section('back')
<a href="" class="back">完了</a>
@endsection

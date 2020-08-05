<!-- 赤ちゃん健診一覧表示画面 -->
@extends('read_layout')

@section('title')
赤ちゃん検診
@endsection

@section('subtitle')
検診結果
@endsection

<!-- 登録ボタンでのページ遷移 -->
@section('register')
<a href="{{ route('baby_checkups.create') }}" class="register">登録</a>
@endsection

@section('lists')
@foreach($baby_checkups as $baby_checkup)

<div class="wrapper_display">
    <div class="wrapper_lists">
        <ul class="lists_title">
        <li>検査年月日:{{$baby_checkup->date}}</li>
        <li>体重:{{$baby_checkup->weight}}㎏</li>
        <li>身長:{{$baby_checkup->height}}cm</li>
        <li>胸囲:{{$baby_checkup->chest}}cm</li>
        <li>頭囲:{{$baby_checkup->head}}cm</li>
        <li>栄養状態:{{$baby_checkup->nutritional_status}}</li>
        <li>栄養方法:{{$baby_checkup->food}}</li>
        <li>目の異常:{{$baby_checkup->eyes_disease}}</li>
        <li>耳の異常:{{$baby_checkup->ears_disease}}</li>
        <li>要治療虫歯:{{$baby_checkup->baby_tooth->teeth_decay}}</li>
        <li>歯のよごれ:{{$baby_checkup->baby_tooth->clearness}}</li>
        <li>歯肉・粘膜:{{$baby_checkup->baby_tooth->gingival_mucous}}</li>
        <li>不正咬合:{{$baby_checkup->baby_tooth->teeth_allignment}}</li>
        <li>歯・口腔の疾病異常:{{$baby_checkup->baby_tooth->oral_disease}}</li>
        <li>生え変わり:{{$baby_checkup->baby_tooth->replaced_teeth}}本</li>
        <li>健康・要観察:{{$baby_checkup->checkups}}</li>
        <li>指導事項:{{$baby_checkup->guidance}}</li>
        <li>施設名/担当者名:{{$baby_checkup->supervisor_name}}</li>

        </ul>
        <div class="btn_edit">
            <!-- 編集ボタン -->
            <a href="{{ route('baby_checkups.edit',$baby_checkup->id) }}" class="edit">編集</a>
            <!-- 削除ボタン -->
            <form action="{{ route('baby_checkups.destroy', $baby_checkup->id)}}" method="post">
                @csrf
                @method('delete')
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

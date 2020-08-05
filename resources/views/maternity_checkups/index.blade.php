<!-- 妊婦健診の一覧表示画面 -->
@extends('read_layout')

@section('title')
妊婦健診
@endsection

@section('subtitle')
検診結果
@endsection

@section('register')
<a href="{{ route('maternity_checkups.create') }}" class="register">登録</a>
@endsection

@section('lists')
@foreach($maternity_checkups as $maternity_checkup)
    <div class="wrapper_display">
        <div class="wrapper_lists">
            <ul class="lists_title">
                        <!-- @yield('lists') -->
                <li>検査年月日:{{$maternity_checkup->date}}</li>
                <li>妊娠週数:{{$maternity_checkup->pregnancy_week}}</li>
                <li>子宮底調:{{$maternity_checkup->fundal_height}}cm</li>
                <li>体重:{{$maternity_checkup->weight}}㎏</li>
                <li>腹囲:{{$maternity_checkup->abdominal_circumference}}cm</li>
                <li>血圧:{{$maternity_checkup->blood_pressure}}</li>
                <li>浮腫:{{$maternity_checkup->edema}}</li>
                <li>尿蛋白:{{$maternity_checkup->urinal_protein}}</li>
                <li>尿糖:{{$maternity_checkup->urinal_sugar}}</li>
                <li>備考欄:{{$maternity_checkup->note}}</li>
            </ul>
            <div class="btn_edit">

              <a href="{{ route('maternity_checkups.edit',$maternity_checkup->id) }}" class="edit">編集</a>
                <!-- @yield('edit') -->

                <form action="{{ route('maternity_checkups.destroy', $maternity_checkup->id)}}" method="post">
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
<a href="{{route('mommies.index')}}" class="back">戻る</a>
@endsection

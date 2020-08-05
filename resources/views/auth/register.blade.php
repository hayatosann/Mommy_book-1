@extends('layouts.app')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div> --}}
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2 class="title">親御様のプロフィールご登録</h2>
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                    <!-- {{-- <form method="POST" action="{{ route('users.confirm') }}"> --}} -->
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right ">{{ __('お名前') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="お名前（ニックネーム）">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="gender" class="col-md-4 col-form-label text-md-right">{{ __('性別') }}</label>

                            <div class="col-md-6">
                                {{-- <input id="name" type="text" class="form-control @error('gender') is-invalid @enderror" name="gender" value="{{ old('gender') }}" required autocomplete="gender" autofocus> --}}
                                <div class="button">
                                    <input id="name" type="radio" class="form-control @error('gender') is-invalid @enderror" name="gender" value="女性" required autocomplete="gender" autofocus placeholder="女性" ><span>女性</span>
                                    <input id="name" type="radio" class="form-control @error('gender') is-invalid @enderror" name="gender" value="男性" required autocomplete="gender" autofocus placeholder="男性" ><span>男性</span>
                                    <input id="name" type="radio" class="form-control @error('gender') is-invalid @enderror" name="gender" value="no content" required autocomplete="gender" autofocus placeholder="no comment" ><span>no content</span>
                                    {{-- {{ old('gender') }} --}}
                                    {{-- <input type="text" class="female" id= "gender"  value="女性" readonly></input>
                                    <input type="text" class="male" id= "gender"  value="男性" readonly></input>
                                    <input type="text" class="none" id="gender"  value="no comment" readonly></input> --}}
                                </div>
                                @error('gender')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="zipcode" class="col-md-4 col-form-label text-md-right">{{ __('お住まいのエリア') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('zipcode') is-invalid @enderror" name="zipcode" value="{{ old('zipcode') }}" required autocomplete="zipcode" autofocus placeholder="郵便番号（例:1400012）">

                                @error('zipcode')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="birthdate" class="col-md-4 col-form-label text-md-right">{{ __('ご生年月日') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="date" class="form-control @error('birthdate') is-invalid @enderror" name="birthdate" value="{{ old('birthdate') }}" required autocomplete="birthdate" autofocus placeholder="カレンダー">

                                @error('birthdate')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('eメールアドレス') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('パスワード（８桁以上で設定してください）') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="パスワード">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="もう一度入力してください">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn-flat-border">
                                    {{ __('入力完了') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

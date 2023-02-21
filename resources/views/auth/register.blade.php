@extends('layouts.app')

@section('content')
    <div class="signupPage">
        <div class="titleArea">
            <h1>アカウントを作成</h1>
            <div class="m-3">or</div>
            <p class="acountPage_link"><a href="{{route('login')}}">アカウントにサインイン</a></p>
        </div>
        <div class="container">
            <form action="{{route('register')}}" method="post" class="mt-5 signupForm" id="new_user" accept-charset="UTF-8">
                @csrf
                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label for="user_name">お名前</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="名前を入力してください" value="{{ old('name') }}" required autofocus>
                    @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="user_email">メールアドレス</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="メールアドレスを入力してください" value="{{ old('email') }}" required autocomplete="email">
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="user_password">パスワード</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="パスワードを入力してください" required autocomplete="off">
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="user_password_confirmation">パスワード確認</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="パスワードを再度入力してください" required autocomplete="off">
                </div>
                <div class="text-center">
                    <input type="submit" value="アカウントを作成" name="commit" class="btn submitBtn" data-disable-with="アカウントを作成">
                </div>
            </form>
        </div>
    </div>
@endsection

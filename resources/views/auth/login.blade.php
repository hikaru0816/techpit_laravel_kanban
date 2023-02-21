@extends('layouts.app')

@section('content')
    <div class="signinPage">
        <div class="container">
            <h2 class="title">kanbanにログイン</h2>
            <div class="text-center m-3">or</div>
            <div class="text-center">
                <p class="acountPage_link"><a href="{{route('register')}}">アカウントを作成</a></p>
            </div>
            <form action="{{route('login')}}" method="post" class="new_user" id="new_user" accept-charset="UTF-8">
                @csrf
                <div class="form-group">
                    <label for="user_email">メールアドレス</label><br>
                    <input type="email" id="email" class="form-control" name="email" value="{{old('email')}}" required autofocus>
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="user_password">パスワード</label>
                    <input type="password" name="password" id="password" class="form-control" required>
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group text-center">
                    <input type="submit" name="commit" value="ログインする" class="loginBtn" data-disable-with="ログインする">
                </div>
            </form>
        </div>
    </div>
@endsection

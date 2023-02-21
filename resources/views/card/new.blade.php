@extends('layouts.app')

@section('content')
    <div class="cardnewPage">
        <div class="container">
            <form
                action="{{route('card.regist', ['listing_id' => $listing_id])}}"
                method="post"
                class="cardnewForm"
                accept-charset="UTF-8"
                data-remote="true"
            >
                @csrf
                <input type="hidden" name="listing_id" value="{{ $listing_id }}">
                <div class="cardnewForm_title">
                    <label for="card_title">タイトル</label>
                    <input type="text" autofocus class="form-control" placeholder="カード名" name="card_title" value="{{ old('card_title') }}">
                </div>
                <div class="cardnewForm_memo">
                    <label for="card_memo">メモ</label>
                    <textarea name="card_memo" autofocus class="form-control" placeholder="詳細">{{ old('card_memo') }}</textarea>
                </div>
                <div class="text-center">
                    <input type="submit" value="作成する" name="commit" class="submitBtn" data-disable-with="作成する">
                </div>
            </form>
        </div>
    </div>
@endsection

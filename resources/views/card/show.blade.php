@extends('layouts.app')

@section('content')
    <div class="carddetailPage">
        <div class="container">
            <div class="cardContents">
                <div>タイトル</div>
                <h2>{{ $card->title }}</h2>
            </div>
            <div class="cardContents_memo">
                <div>メモ</div>
                <div>{{ $card->memo }}</div>
            </div>
            <div class="cardContents_listStatus">
                <div>リスト名</div>
                <div>{{ $listing->title }}</div>
            </div>
            <div class="cardContents_btnArea">
                <a
                    href="{{route('card.edit', ['listing_id', $listing->id, 'card_id' => $card->id])}}"
                    class="edit_btn"
                >
                    編集する
                </a>
                <a
                    href="{{route('card.delete', ['listing_id' => $listing->id, 'card_id' => $card->id])}}"
                    class="text-danger delete_btn"
                    onclick="return confirm('このカードを削除してよろしいですか?')"
                    rel="nofollow"
                    data-method="delete"
                >
                    削除する
                </a>
            </div>
        </div>
    </div>
@endsection

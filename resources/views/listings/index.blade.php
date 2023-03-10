@extends('layouts.app')

@section('content')
    <div class="topPage">
        <div class="listWrapper">
            @foreach ($listings as $listing)
                <div class="list">
                    <div class="list_header">
                        <h2 class="list_header_title">{{ $listing->title }}</h2>
                        <div class="list_header_action">
                            <a
                                href="{{ route('listings.delete', ['listing_id' => $listing->id]) }}"
                                onclick="return confirm('{{ $listing->title }}を削除してよろしいですか?')"
                            >
                                <i class="fas fa-trash"></i>
                            </a>
                            <a href="{{ route('listings.edit', ['listing_id' => $listing->id]) }}">
                                <i class="fas fa-pen"></i>
                            </a>
                        </div>
                    </div>
                    <div class="cardWrapper">
                        @foreach ($listing->cards as $card)
                            <a
                                href="{{ route('card.show', ['listing_id' => $listing->id, 'card_id' => $card->id]) }}" class="cardDetail_link"
                            >
                                <div class="card">
                                    <h3 class="card_title">{{ $card->title }}</h3>
                                    <div class="card_detail is-exist">
                                        <i class="fas fa-bars"></i>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                        <div class="addCard">
                            <i class="far fa-plus-square"></i>
                            <a
                                href="{{ route('new_card', ['listing_id' => $listing->id]) }}"
                                class="addCard_link"
                            >
                                さらにカードを追加
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

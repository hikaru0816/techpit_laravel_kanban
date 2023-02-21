@extends('layouts.app')
@section('content')
    @include('common.errors')
    <div class="cardeditPage">
        <div class="container">
            <form
                action="{{route('card.update')}}"
                method="post"
                class="cardeditForm"
                id="edit_card"
            >
                @csrf
                <input type="hidden" name="id" value="{{$card->id}}">
                <div class="cardeditForm_title">
                    <label for="card_title">タイトル</label>
                    <input type="text" class="form-control" placeholder="カード名" value="{{old('card_title', $card->title)}}" name="card_title">
                </div>
                <div class="cardeditForm_memo">
                    <label for="card_memo">メモ</label>
                    <textarea name="card_memo" class="form-control" placeholder="詳細">{{ old('card_memo', $card->memo) }}</textarea>
                </div>
                <div class="cardeditForm_memo">
                    <label>リスト名</label>
                    <select name="listing_id" class="form-control">
                        @foreach ($listings as $listing)
                            <option
                                value="{{ $listing->id }}"
                                @if (old('listing_id', $listing->id) == $listing->id)
                                    selected
                                @endif
                            >
                                {{ $listing->title }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="text-center">
                    <input type="submit" value="更新する" name="commit" class="submitBtn" data-disable-with="更新する">
                </div>
            </form>
        </div>
    </div>
@endsection

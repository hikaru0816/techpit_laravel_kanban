<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListingsController;
use App\Http\Controllers\CardsController;

Route::get('/', [ListingsController::class, 'index']);
Route::get('/new', [ListingsController::class, 'new'])->name('new');
Route::post('/listings', [ListingsController::class, 'store'])->name('listings');
Route::get('/listingsedit/{listing_id}', [ListingsController::class, 'edit'])->name('listings.edit');
Route::post('listings/edit', [ListingsController::class, 'update'])->name('listings.update');
Route::get('/listingsdelete/{listing_id}', [ListingsController::class, 'destroy'])->name('listings.delete');

Route::get('listing/{listing_id}/card/new', [CardsController::class, 'new'])->name('new_card');
Route::post('listing/{listing_id}/card', [CardsController::class, 'store'])->name('card.regist');
Route::get('listing/{listing_id}/card/{card_id}', [CardsController::class, 'show'])->name('card.show');
Route::get('listing/{listing_id}/card/{card_id}/edit', [CardsController::class, 'edit'])->name('card.edit');
Route::post('card/edit', [CardsController::class, 'update'])->name('card.update');
Route::get('listing/{listing_id}/card/{card_id}/delete', [CardsController::class, 'destroy'])->name('card.delete');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Auth;
use App\Http\Requests\ListingsRequest;

use Illuminate\Http\Request;

class ListingsController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        $listings = Listing::where('user_id', Auth::user()->id)
            ->orderBy('created_at', 'asc')
            ->get();
        return view('listings.index', [
            'listings' => $listings,
        ]);
    }

    public function new() {
        return view('listings.new');
    }

    public function store(ListingsRequest $request, Listing $listing) {
        $listing->title = $request->list_name;
        $listing->user_id = Auth::user()->id;
        $listing->save();
        return redirect('/');
    }

    public function update(ListingsRequest $request) {
        $listing = Listing::find($request->id);
        var_dump($listing);
        $listing->title = $request->list_name;
        $listing->save();
        return redirect('/');
    }

    public function edit($listing_id) {
        $listing = Listing::find($listing_id);
        return view('listings.edit', [
            'listing' => $listing,
        ]);
    }

    public function destroy($listing_id) {
        $listing = Listing::find($listing_id);
        $listing->delete();
        return redirect('/');
    }
}

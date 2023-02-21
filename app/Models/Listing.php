<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Card;

class Listing extends Model
{
    public function cards() {
        return $this->hasMany(Card::class);
    }
}

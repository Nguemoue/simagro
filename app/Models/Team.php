<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $guarded = [];


    protected function posterUrl(): Attribute
    {
        return Attribute::make(
            get: fn($value, array $attributes) => asset('storage/'.$attributes['image']),

        );
    }
}

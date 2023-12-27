<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Home extends Model
{
    use HasFactory;
    protected $fillable = [
        'logo',
        'primary_color',
        'image_slides',
        'slogan',
        'image_documentation',
        'footer',
    ];

    public function logo(): Attribute
    {
        return Attribute::make(
            get: fn ($logo) => asset('/storage/images/' . $logo),
        );
    }
}

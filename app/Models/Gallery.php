<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_id',
        'foto',
        'judul',
        'deskripsi',
    ];

    public function foto(): Attribute
    {
        return Attribute::make(
            get: fn ($foto) => asset('storage/images/' . $foto)
        );
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}

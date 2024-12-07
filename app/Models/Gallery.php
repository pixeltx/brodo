<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Gallery extends Model
{
    use HasFactory;

    protected $fillable = [
        'image'
    ];

    public function getImageUrlAttribute()
    {
        return Storage::disk('gallery')->url($this->image);
    }
}

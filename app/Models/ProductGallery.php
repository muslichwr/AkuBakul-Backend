<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class ProductGallery extends Model
{
    use SoftDeletes, HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'product_id',
        'url',
    ];

    public function getUrlAttribute($url)
    {
        // Jika URL adalah file lokal (disimpan di storage)
        if ($this->is_external === false) {
            return config('app.url') . Storage::url($url);
        }
    
        // Jika URL adalah eksternal, kembalikan URL asli
        return $url;
    }
}
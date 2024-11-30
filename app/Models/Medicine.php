<?php

namespace App\Models;

use App\Models\Kategori;
use App\Models\ResepItem;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Medicine extends Model
{
    use HasFactory;

    protected $fillable = [
        'kategori_id',
        'nama',
        'slug',
        'stok',
        'deskripsi',
        'images',
    ];

    protected $casts = [
        'images' => 'array',
    ];
    public function getFirstImageUrlAttribute()
    {
        return isset($this->images[0])
            ? asset('storage/' . $this->images[0])
            : null; // Jika array kosong, kembalikan null
    }




    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }

}
<?php

namespace App\Models;

use App\Models\Medicine;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kategori extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_kategori',
        'slug',
        'images',
        'is_active',
    ];

    public function medicine()
    {
        return $this->hasMany(Medicine::class);
    }
}
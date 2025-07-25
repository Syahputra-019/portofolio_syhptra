<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeskripsiTambahan extends Model
{
    use HasFactory;

    protected $fillable = ['tentang_id', 'deskripsi'];

    public function tentang()
    {
        return $this->belongsTo(Tentang::class);
    }
}



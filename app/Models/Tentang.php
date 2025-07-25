<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tentang extends Model
{
    protected $table = 'tentangs'; // atau sesuai nama tabel
    protected $fillable = ['nama', 'deskripsi'];

    public function tambahan()
    {
        return $this->hasMany(DeskripsiTambahan::class);
    }


}


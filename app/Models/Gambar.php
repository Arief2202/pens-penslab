<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Ruangan;

class Gambar extends Model
{
    use HasFactory;

    protected $fillable = [
        'ruangan_id',
        'gambar',
    ];

    public function ruangans() {
        return $this->hasOne(Ruangan::class);
    }
}

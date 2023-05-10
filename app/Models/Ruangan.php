<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use App\Models\Gambar;

class Ruangan extends Model
{
    use HasFactory;
    protected $table = "ruangan";
    protected $guarded = [];

    public function gambars() {
        return $this->hasMany(Gambar::class);
    }
    public function gambar() {
        return Gambar::where('ruangan_id', '=', $this->id)->get(); 
    }
}

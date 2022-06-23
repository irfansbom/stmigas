<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perusahaan extends Model
{
    use HasFactory;
    protected $table = 'perusahaan';
    protected $guarded = [];


    public function user()
    {
        return $this->hasMany(User_Perusahaan::class, 'id', 'id_perusahaan');
    }
}

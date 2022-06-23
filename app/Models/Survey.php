<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    use HasFactory;

    protected $table = 'survey';
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(Survey::class, 'id_user', 'id');
    }

    public function perusahaan()
    {
        return $this->belongsTo(Perusahaan::class, 'id_perusaahan', 'id');
    }
}

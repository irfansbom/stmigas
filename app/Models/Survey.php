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
        return $this->belongsTo(Survey::class, 'email', 'email');
    }
}

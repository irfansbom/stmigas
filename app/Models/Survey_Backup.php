<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Survey_Backup extends Model
{
    use HasFactory;
    protected $table = 'survey';
    protected $guarded = [];
}

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
        return $this->belongsTo(User::class, 'id_user', 'id');
    }

    public function perusahaan()
    {
        return $this->belongsTo(Perusahaan::class, 'id_perusaahan', 'id');
    }
    public function badge_status($st)
    {
        switch ($st) {
            case '':
                return "<div class='badge bg-primary text-dark align-middle'>Menunggu <br/> Persetujuan SKK</div>";
                break;
            case 'Dalam Proses':
                return "<div class='badge bg-warning text-dark align-middle'>Dalam <br/> Proses</div>";
                break;
            case 'Disetujui':
                return "<div class='badge bg-success align-middle'>Disetujui SKK</div>";
                break;
        }
    }
}

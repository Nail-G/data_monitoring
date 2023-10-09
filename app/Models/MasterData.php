<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterData extends Model
{
    use HasFactory;

    protected $table = 'event_log';
    
    protected $fillable=[
        'modul',
        'id_satuan_kerja',
        'kode_cabang',
        'last_updated',
        'dbname',
    ];
}


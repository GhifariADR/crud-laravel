<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M_obat extends Model
{
    use HasFactory;
    protected $table = 'obats';
    protected $fillable = [
        'nama','deskripsi','tipe','jumlah','hargasatuan'
    ];

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaklumatKorban extends Model
{
    use HasFactory;
    protected $table = 'maklumat_korban';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'harga_qurban_bahagian',
        'harga_qurban_seekor',
        'kuantiti_lembu'
    ];
}

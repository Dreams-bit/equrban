<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KariahPengedar extends Model
{
    use HasFactory;
    protected $table = 'kariah_pengedar_qurban';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'name',
        'phone',
        'harga_pengedar',
        'available_unit',
        'whatsapp_status',
        'kariah_id',
    ];

    public function kariah()
    {
        return $this->belongsTo(Kariah::class);
    }
}

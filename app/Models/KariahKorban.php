<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KariahKorban extends Model
{
    use HasFactory;
    protected $table = 'kariah_booking_korban';
    protected $primaryKey = 'id';

    protected $fillable = [
        'peserta_name',
        'pakej_korban',
        'harga_korban',
        'status_pembayaran',
        'receipt_name',
        'file_path',
        'kariah_id',
        'hari_korban',
        'waktu_sembelihan'
    ];

    public function kariahKorban()
    {
        return $this->belongsTo(Kariah::class);
    }

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KariahKorbanTable extends Model
{
    use HasFactory;
    protected $table = 'kariah_booking_korban_table';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'peserta_name',
        'pakej_korban',
        'harga_korban',
        'kariah_id',
    ];

    public function kariahKorban()
    {
        return $this->belongsTo(Kariah::class);
    }
}

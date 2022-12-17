<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kariah extends Model
{
    use HasFactory;
    protected $table = 'kariahs';
    protected $primaryKey = 'id';
    public $timestamps = false;

    //mass_asssignment that send an array to model to store data in database
    protected $fillable = [
        'ic_number',
        'name',
        'phone',
        'address1',
        'address2',
        'city',
        'state',
        'email',
        'password'
    ];

    public function kariahPengedar()
    {
        return $this->hasMany(KariahPengedar::class);
    }
}

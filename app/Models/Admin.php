<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    protected $table = 'admins';
    protected $primaryKey = 'id';
    public $timestamps = false;

    //mass_asssignment that send an array to model to store data in database
    protected $fillable = [
        'nama_jawatan',
        'nama_ajk',
        'password'
    ];
}

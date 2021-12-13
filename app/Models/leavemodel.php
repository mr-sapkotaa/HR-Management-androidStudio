<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class leavemodel extends Model
{
    public $timestamps= FALSE;

    use HasFactory;
    protected $table='leave';
    protected $fillable=['sn','from','to','type','reason'];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reportmodel extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $table='report';
    protected $fillable=['date','attendence','intime','outtime','workhour'];
}

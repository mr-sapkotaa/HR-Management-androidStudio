<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class messegesmodel extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $table='messeges';
    protected $fillable=['photo','fullname','text','time',];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class calendermodel extends Model
{
    use HasFactory;
    public $timestamps= FALSE;
    
    protected $table='calender';
    protected $fillable=['date','upcomingevents'];

}

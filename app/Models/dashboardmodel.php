<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dashboardmodel extends Model
{
    public $timestamps= FALSE;

    use HasFactory;
    protected $table='dashboard';
    protected $fillable=['photo','fullname','position','age','phonenumber','gender','receivablesalary','totalpresent',
    'totalabsent','halfdayleave','officialholiday','intime','outtime'];
}

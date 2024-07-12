<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LawCus extends Model
{
    use HasFactory;
    protected $table = 'LawCus';

    public function ViewCusToFin()
    {
        return $this->hasMany(Finance::class,'cus_id','id');
    }
    public function ViewCusToCom()
    {
        return $this->hasOne(Compromise::class,'cus_id','id')->latest();
    }


}

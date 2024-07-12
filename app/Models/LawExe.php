<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LawExe extends Model
{
    use HasFactory;
    protected $table = 'LawExe';
    public function ViewExeToFin()
    {
        return $this->hasMany(Finance::class,'cus_id','id');
    }
    public function ViewExeToCom()
    {
        return $this->hasOne(Compromise::class,'cus_id','cus_id')->latest();
    }
}

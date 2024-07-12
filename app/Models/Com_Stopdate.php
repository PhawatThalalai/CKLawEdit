<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\tbl_privilege;

class Com_Stopdate extends Model
{
    use HasFactory;
    protected $table = 'Com_Stopdate';
    protected $fillable = ['id','date','cus_id','note'];
}

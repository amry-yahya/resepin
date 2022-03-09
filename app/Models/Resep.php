<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Resep extends Model
{
    use HasFactory;
    protected $table = 'reseps';
    protected $fillable = ['recipe_name','jumlah_rater','id_user','user_name','cooking_time','tag','image','description','rating','ingredients','steps'];
}

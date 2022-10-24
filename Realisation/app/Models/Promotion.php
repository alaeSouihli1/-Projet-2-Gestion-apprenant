<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Apprenant;

class Promotion extends Model
{
    use HasFactory;
    protected $fillable=[
        'id',
        'name',
    ];

    public function apprenants(){
        return this->hasMany(Apprenant::class,'promotion_id','id');
    }
}

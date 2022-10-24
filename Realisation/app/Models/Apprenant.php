<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Promotion;


class Apprenant extends Model
{
    use HasFactory;
    protected $fillable=[
        'id',
        'prenom',
        'nom',
        'email'
    ];
    
    public function promotion(){
        return this->belongsTo(Promotion::class);
    }
}

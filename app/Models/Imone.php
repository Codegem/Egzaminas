<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imone extends Model
{
    protected $fillable = [
        'pavadinimas' ,
        'kodas' ,
        'pvm_kodas' ,
        'adresas' ,
        'telefonas' ,
        'elpastas' ,
        'veikla' ,
        'vadovas'
    ];
        // protected $guarded = [];
        
    public function user(){
        return $this->belongsTo(User::class);
    }

}

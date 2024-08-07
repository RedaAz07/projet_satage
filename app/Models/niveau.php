<?php

namespace App\Models;

use App\Models\classe;
use App\Models\filiere;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class niveau extends Model
{
    use HasFactory;

    protected $fillable =["niveau"];
    protected $primaryKey="id_niveau";


    public function filiere()
    {
        return $this->belongsTo(filiere::class, 'id_filiere')
           ;
    }

    public function classe(){
        return $this->hasMany(classe::class,'id_classe');
}
}

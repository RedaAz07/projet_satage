<?php

namespace App\Models;

use App\Models\classe;
use App\Models\groupe;
use App\Models\utilisateur;
use App\Models\messageClasse;
<<<<<<< HEAD
=======
use App\Models\adminEtudMessages;
>>>>>>> d468491c8ae6fa6832ad2f5b04819c4ec1ac580c
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class etudient extends Model
{
    use HasFactory;
    protected $fillable =["nom","prenom","telephone","addresse","CIN","dateNaissance","id"];
    protected $primaryKey="id_etudient";


    public function classe(){
        return $this->belongsTo(classe::class,'id_classe');
}

<<<<<<< HEAD
=======


>>>>>>> d468491c8ae6fa6832ad2f5b04819c4ec1ac580c
public function utilisateur(){
    return $this->belongsTo(utilisateur::class,'id');
}


public function messageClasse(){
    return $this->hasMany(messageClasse::class,'id');
}





public function messageformateur(){
    return $this->hasMany(messageformateur::class,'id');
}


public function adminEtudMessages(){
    return $this->hasMany(adminEtudMessages::class,'id');
}



public function messageClasse(){
    return $this->hasMany(messageClasse::class,'id');
}

}

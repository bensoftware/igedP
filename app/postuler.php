<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class postuler extends Model
{
    //
    protected $fillable = [
       'nom','prenom','diplome','filliere','niveau','email','phone'
  ];

}

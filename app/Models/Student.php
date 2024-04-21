<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = 'student'; //El nombre del modelo que va estar relacionado con esta table

    protected $filable = [  //Aqui le diremos cuales campos van poder ser modificados, alterados
        'name',
        'email',
        'phone',
        'language',
    ];
}

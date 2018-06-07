<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $table = 'movies';

    /**
     * Aqui se asignan los atributos que se le asignara un valor
     * los que son modificables como tal, el id se puede ignorar
     * , asi como el timestamp
     */
    protected $fillable = ['name','duration','genre','earnings','description'];
    

    //protected $hidden = ['updated_at'];
}

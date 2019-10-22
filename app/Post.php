<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['titulo', 'descricao', 'texto', 'data_criacao', 'categoria'];
}

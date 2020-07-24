<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
   protected $table ="matches";
   
   protected $filable = [

    'name',
    'next',
    'winner',
    'board',
   ];
}

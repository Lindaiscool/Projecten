<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
// hello
// echo

class Video extends Model

{

  protected $table = 'videos';

  protected $fillable = [

      'title', 'video'

  ];

}

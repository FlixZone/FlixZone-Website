<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
     // Table Name
     protected $table = 'movies';

     // Primary Key
     public $primaryKey = 'id';
 
     // Time Stamp
     public $timestamp = true;
}

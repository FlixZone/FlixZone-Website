<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TVshow extends Model
{
     // Table Name
     protected $table = 'tvshows';

     // Primary Key
     public $primaryKey = 'id';
 
     // Time Stamp
     public $timestamp = true;
}

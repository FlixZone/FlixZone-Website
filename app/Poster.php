<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Poster extends Model
{
    // Table Name
    protected $table = 'posters';

    // Primary Key
    public $primaryKey = 'id';

    // Time Stamp
    public $timestamp = true;
}

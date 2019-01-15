<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class App extends Model
{
    // Table Name
    protected $table = 'apps';

    // Primary Key
    public $primaryKey = 'id';

    // Time Stamp
    public $timestamp = true;
}

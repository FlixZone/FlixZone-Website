<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MegaAccount extends Model
{
    // Table Name
    protected $table = 'mega-accounts';

    // Primary Key
    public $primaryKey = 'id';

    // Time Stamp
    public $timestamp = true;
}

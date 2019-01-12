<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SocialLink extends Model
{
    // Table Name
    protected $table = 'socials';

    // Primary Key
    public $primaryKey = 'id';

    // Time Stamp
    public $timestamp = true;
}

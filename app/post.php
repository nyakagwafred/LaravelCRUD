<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    //Table Name
    protected $table = 'posts';
    //Primary Key
    public $primaryKey = 'id';
    //Timestamps
    public $timestamps = true;
}

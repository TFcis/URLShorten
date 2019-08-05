<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class URL extends Model
{
    protected $table = 'url';
    protected $primaryKey = 'urlid';
    public $timestamps = false;
    protected $fillable = ['shortname', 'url','uid'];

}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class notification extends Model
{
    public $table = 'notifications';

    public $primaryKey ='id';
    public $timestamp =true;
    public $incrementing =true;
}

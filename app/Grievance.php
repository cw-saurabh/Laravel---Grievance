<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grievance extends Model
{
    public $table = 'grievances';

    public $primaryKey ='id';
    public $timestamp ='true';
    public $status = 0;
}

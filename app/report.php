<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class report extends Model
{
       //
       public $table = 'reports';

       public $primaryKey ='report_id';
       public $timestamp =true;
       public $incrementing =true;
      // public $report = 'nullable';
   
}

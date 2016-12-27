<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TimeTables extends Model
{
    protected $table = 'time_table';
    protected $primaryKey='schedule_id';
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentHasBatch extends Model
{
    protected $table = 'student_has_batches';
    protected $primaryKey='student_has_batch_id';
}

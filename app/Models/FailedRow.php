<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FailedRow extends Model
{
    protected $guarded = false;
    protected $table = 'failed_rows';
}

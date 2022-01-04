<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Working_service extends Model
{
    protected $guarded = ['_token', '_method'];
}

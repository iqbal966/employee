<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class leaves extends Model
{

    protected $fillable = ['leave_type', 'start_date', 'end_date', 'reason'];

    public function user()
    {
        return $this->belongsTo('App\User', 'staff_id');
    }
}

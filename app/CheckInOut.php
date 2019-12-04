<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CheckInOut extends Model
{
    protected $fillable = ['check_in_out'];

    public function user()
    {
        return $this->belongsTo('App\User', 'staff_id');
    }
}

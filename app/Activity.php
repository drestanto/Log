<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'subject_id', 'subject_type', 'name', 'user_id',
    ];

    public function user() {
    	return $this->belongsTo('App\User');
    }

}

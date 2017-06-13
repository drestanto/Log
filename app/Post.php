<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use RecordsActivity;

    // protected static $recordEvents = ['created'];
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'title', 'body',
    ];

}

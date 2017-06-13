<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use RecordsActivity;

    protected static function boot()
    {
    	parent::boot();

    	static::created(function($post) {
    		Activity::create([
    			'subject_id' => $post->id,
    			'subject_type' => get_class($post),
    			'name' => 'created_post',
    			'user_id' => $post->user_id
    		]);

    	});
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'title', 'body',
    ];

}

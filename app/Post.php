<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
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

}

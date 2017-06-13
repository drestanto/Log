<?php

namespace App;

trait RecordsActivity
{

	protected static function boot()
	{
    	parent::boot();

    	static::created(function($model) {
    		Activity::create([
    			'subject_id' => $model->id,
    			'subject_type' => get_class($model),
    			'name' => $model->getActivityName($model, "created"),
    			'user_id' => $model->user_id
    		]);

    	});
	}

	protected function getActivityName($model, $action)
	{
		$name = strtolower((new \ReflectionClass($model))->getShortName());
		return $action . "_" . $name;
	}
}
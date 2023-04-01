<?php

namespace Jakyeru\Snowflake\Traits;

trait HasSnowflakes
{
    protected static function boot()
    {
        parent::boot();
        static::creating(function($model) {
            if (!$model->getKey()) {
                $key = resolve('snowflake')->id();
                $model->{$model->getKeyName()} = $key;
            }
        });
    }

    public function getIncrementing()
    {
        return false;
    }
    
    public function mergeCasts($casts)
    {
        $casts = $this->casts;

        if (!isset($casts['id'])) {
            $this->casts = array_merge($casts, [
                'id' => 'string',
            ]);
        }
    }
}

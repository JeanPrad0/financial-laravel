<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class provider extends Person
{
    /**
     * The "booting" method of the model.
     *
     * @return void
     */
    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope('type', function (Builder $builder) {
            $builder->where('type   ', 'provider');
        });
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class App extends Model
{
    protected $fillable = ['name', 'enabled'];

    protected $attributes = array(
        'settings' => '{}'
    );

    protected $casts = [
        'enabled' => 'boolean',
        'settings' => 'array'
    ];
}

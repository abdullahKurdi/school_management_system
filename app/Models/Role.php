<?php

namespace App\Models;

use Mindscms\Entrust\EntrustRole;
use Nicolaslopezj\Searchable\SearchableTrait;

class Role extends EntrustRole
{
    use SearchableTrait ;

    protected $guarded = [];

    protected $searchable = [
        'columns' => [
            'roles.display_name' => 10,
            'roles.name' => 10,
        ],
    ];
}

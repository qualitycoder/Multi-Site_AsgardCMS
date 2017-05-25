<?php

namespace Modules\Site\Entities;

use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    protected $table = 'site__sites';
    protected $fillable = [
		'title',
        'url',
        'address_1',
        'address_2',
        'city',
        'state',
        'zip',
        'phone'
    ];
}

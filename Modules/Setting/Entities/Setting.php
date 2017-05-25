<?php

namespace Modules\Setting\Entities;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;
use App\Scopes\SiteScope;

class Setting extends Model
{
    use Translatable;

    public $translatedAttributes = ['value', 'description'];
    protected $fillable = ['name', 'value', 'description', 'isTranslatable', 'plainValue'];
    protected $table = 'setting__settings';

    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope(new SiteScope);
    }
}

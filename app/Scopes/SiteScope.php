<?php

namespace App\Scopes;

use Illuminate\Database\Eloquent\Scope;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class SiteScope implements Scope {
	/**
     * Apply the scope to a given Eloquent query builder.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $builder
     * @param  \Illuminate\Database\Eloquent\Model  $model
     * @return void
     */
	public function apply(Builder $builder, Model $model) {
		
		/* For the main site (www), sometimes we don't want the scope.
		 * These are ones where we want to maintain the scope. 
		 */
		$force_scope = [
			'Modules\Setting\Entities\Setting'
		];
		
		$site = config('site');

		if($site->id != 1 || in_array(get_class($model), $force_scope)){
			$builder->where('site_id', '=', $site->id);
		}
	}

	public function remove(Builder $builder, Model $model) {

	}
	
}
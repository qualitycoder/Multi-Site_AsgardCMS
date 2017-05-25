<?php namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Site\Entities\Site;

class ConfigServiceProvider extends ServiceProvider {

	/**
	 * Overwrite any vendor / package configuration.
	 *
	 * This service provider is intended to provide a convenient location for you
	 * to overwrite any "vendor" or package configuration that you may want to
	 * modify before the application handles the incoming request / command.
	 *
	 * @return void
	 */
	public function register()
	{
		config([
			//
		]);
	}

	public function boot(Site $site) {
		$url = url('/');
		$foundsite = $site->where('url', '=', $url)->first();

		if(is_null($foundsite)) {
			$foundsite = $site::find(1);
		}

		config(['site'=>$foundsite]);
	}
}
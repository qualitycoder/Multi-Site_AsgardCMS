<?php

namespace Modules\Site\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Core\Traits\CanPublishConfiguration;

class SiteServiceProvider extends ServiceProvider
{
    use CanPublishConfiguration;
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->registerBindings();
    }

    public function boot()
    {
        $this->publishConfig('site', 'permissions');
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return array();
    }

    private function registerBindings()
    {
        $this->app->bind(
            'Modules\Site\Repositories\SiteRepository',
            function () {
                $repository = new \Modules\Site\Repositories\Eloquent\EloquentSiteRepository(new \Modules\Site\Entities\Site());

                if (! config('app.cache')) {
                    return $repository;
                }

                return new \Modules\Site\Repositories\Cache\CacheSiteDecorator($repository);
            }
        );
// add bindings

    }
}

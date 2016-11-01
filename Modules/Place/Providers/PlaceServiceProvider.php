<?php namespace Modules\Place\Providers;

use Illuminate\Support\ServiceProvider;

class PlaceServiceProvider extends ServiceProvider
{
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
            'Modules\Place\Repositories\PlaceRepository',
            function () {
                $repository = new \Modules\Place\Repositories\Eloquent\EloquentPlaceRepository(new \Modules\Place\Entities\Place());

                if (! config('app.cache')) {
                    return $repository;
                }

                return new \Modules\Place\Repositories\Cache\CachePlaceDecorator($repository);
            }
        );
// add bindings

    }
}

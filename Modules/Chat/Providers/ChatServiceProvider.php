<?php namespace Modules\Chat\Providers;

use Illuminate\Support\ServiceProvider;

class ChatServiceProvider extends ServiceProvider
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
            'Modules\Chat\Repositories\ChatRepository',
            function () {
                $repository = new \Modules\Chat\Repositories\Eloquent\EloquentChatRepository(new \Modules\Chat\Entities\Chat());

                if (! config('app.cache')) {
                    return $repository;
                }

                return new \Modules\Chat\Repositories\Cache\CacheChatDecorator($repository);
            }
        );
// add bindings

    }
}

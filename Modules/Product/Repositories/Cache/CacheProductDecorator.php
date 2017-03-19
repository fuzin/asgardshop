<?php namespace Modules\Product\Repositories\Cache;

use Modules\Product\Repositories\ProductRepository;
use Modules\Core\Repositories\Cache\BaseCacheDecorator;

class CacheProductDecorator extends BaseCacheDecorator implements ProductRepository
{
    public function __construct(ProductRepository $place)
    {
        parent::__construct();
        $this->entityName = 'place.places';
        $this->repository = $place;
    }
}

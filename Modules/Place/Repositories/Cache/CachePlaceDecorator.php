<?php namespace Modules\Place\Repositories\Cache;

use Modules\Place\Repositories\PlaceRepository;
use Modules\Core\Repositories\Cache\BaseCacheDecorator;

class CachePlaceDecorator extends BaseCacheDecorator implements PlaceRepository
{
    public function __construct(PlaceRepository $place)
    {
        parent::__construct();
        $this->entityName = 'place.places';
        $this->repository = $place;
    }
}

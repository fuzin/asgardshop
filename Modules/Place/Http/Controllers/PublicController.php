<?php namespace Modules\Place\Http\Controllers;

use Illuminate\Support\Facades\App;
use Modules\Place\Repositories\PlaceRepository;
use Modules\Core\Http\Controllers\BasePublicController;

class PublicController extends BasePublicController
{
    /**
     * @var PostRepository
     */
    private $place;

    public function __construct(PlaceRepository $place)
    {
        parent::__construct();
        $this->place = $place;
    }

    public function index()
    {
        // $places = $this->place->allTranslatedIn(App::getLocale());
        $places = $this->place->all();
        return view('place.index', compact('places'));
    }


    public function show($slug)
    {
        $place = $this->place->findBySlug($slug);

        return view('place.show', compact('place'));
    }
}

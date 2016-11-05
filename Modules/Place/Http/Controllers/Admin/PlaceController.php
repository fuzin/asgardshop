<?php namespace Modules\Place\Http\Controllers\Admin;

use Laracasts\Flash\Flash;
use Illuminate\Http\Request;
use Modules\Place\Entities\Place;
use Modules\Place\Repositories\PlaceRepository;
use Modules\Core\Http\Controllers\Admin\AdminBaseController;

class PlaceController extends AdminBaseController
{
    /**
     * @var PlaceRepository
     */
    private $place;

    public function __construct(PlaceRepository $place)
    {
        parent::__construct();

        $this->place = $place;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $places = $this->place->all();

        return view('place::admin.places.index', compact('places'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('place::admin.places.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $this->place->create($request->all());

        flash()->success(trans('core::core.messages.resource created', ['name' => trans('place::places.title.places')]));

        return redirect()->route('admin.place.place.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Place $place
     * @return Response
     */
    public function edit(Place $place)
    {
        return view('place::admin.places.edit', compact('place'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Place $place
     * @param  Request $request
     * @return Response
     */
    public function update(Place $place, Request $request)
    {
        $this->place->update($place, $request->all());

        flash()->success(trans('core::core.messages.resource updated', ['name' => trans('place::places.title.places')]));

        return redirect()->route('admin.place.place.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Place $place
     * @return Response
     */
    public function destroy(Place $place)
    {
        $this->place->destroy($place);

        flash()->success(trans('core::core.messages.resource deleted', ['name' => trans('place::places.title.places')]));

        return redirect()->route('admin.place.place.index');
    }
}

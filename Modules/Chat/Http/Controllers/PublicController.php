<?php namespace Modules\Chat\Http\Controllers;

use brunojk\LaravelRethinkdb\Query\Builder;
use Illuminate\Support\Facades\App;
use Illuminate\Http\Response;
use Modules\Chat\Repositories\ChatRepository;
use Modules\Core\Http\Controllers\BasePublicController;
use brunojk\LaravelRethinkdb\Connection as RethinkDBConn;
use brunojk\LaravelRethinkdb\Query as Query;
use brunojk\LaravelRethinkdb\Query\Builder as Bilder;


class PublicController extends BasePublicController
{
    /**
     * @var PostRepository
     */
    private $chat;

    public function __construct(ChatRepository $chat)
    {
        parent::__construct();
        $this->chat = $chat;
    }

    /**
     * Show chat room.
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        // $places = $this->place->allTranslatedIn(App::getLocale());
        // $places = $this->place->all();
        return view('chat.index', compact(''));
    }

    /**
     * Store chat.
     */
    public function store() {

        // rethinkdb
        /*
        $conn = new RethinkDBConn([
            'name'      => 'rethinkdb',
            'driver'    => 'rethinkdb',
            'host'      => env('DB_HOST', 'localhost'),
            'port'      => env('DB_PORT', 28015),
            'database'  => env('DB_DATABASE', 'test'),
        ]);


        $q = new Query($conn);
        $builder = new Builder($conn);
        $q->table('test');
        
        $result = $q->run();
        dd($result);
        return 'test';
        */

        return response(array('email' => 'bojan@kovacec.net'),200)->header('Content-Type', 'application/json');
    }

}

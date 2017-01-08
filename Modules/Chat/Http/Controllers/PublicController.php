<?php namespace Modules\Chat\Http\Controllers;

use brunojk\LaravelRethinkdb\Query\Builder;
use Illuminate\Support\Facades\App;
use Illuminate\Http\Response;
use Modules\Chat\Repositories\ChatRepository;
use Modules\Core\Http\Controllers\BasePublicController;

use brunojk\LaravelRethinkdb\Connection as RethinkDBConn;
use brunojk\LaravelRethinkdb\Query as Query;
use brunojk\LaravelRethinkdb\Query\Builder as Bilder;


use Modules\Chat\Http\Requests\CreateMessageRequest;

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
    public function store(CreateMessageRequest $request) {

        $con = new RethinkDBConn(
            [
                'port'      => 28015,
                'host'      => 'localhost',
                'database'  => 'test'
            ]
        );

        $insertData = [
            "text"      => $request->get("text"), // $request->param("message"),
            "username"  => $request->get("username") // $request->param("username")
        ];

        $query = new Query\Builder($con);
        $query->from("message");
        $success = $query->insert($insertData);

        /*
        $query->insert([
            'test' => 'test'
        ]);
        */



        /*
        $query->r()->run('r.table(\'message\').insert({
                text: \'message test 123\',
                username: \'test\'})');
        */


        // $query->insert();


        // rethinkdb
        // $path = base_path('vendor/danielmewes/php-rql/rdb');
        // include "$path/rdb.php";

        // dd("$path/rdb.php");
        // $conn = r\connect('localhost');

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

        return response(array('succes' => $success),200)->header('Content-Type', 'application/json');
    }

    /**
     * Chat room
     */
    public function room() {
        // urls for services
        $baseUrl = url('/');
        $storeMsgUrl = $baseUrl.':8282/';
        $wsUrl = 'ws://'.preg_replace('#^https?://#', '', $baseUrl).':8081/';
        return view('chat.room', compact('storeMsgUrl', 'wsUrl'));
    }

}

<?php namespace Modules\Chat\Http\Controllers\Admin;

use Laracasts\Flash\Flash;
use Illuminate\Http\Request;
use Modules\Chat\Entities\Chat;
use Modules\Chat\Repositories\ChatRepository;
use Modules\Core\Http\Controllers\Admin\AdminBaseController;

class ChatController extends AdminBaseController
{
    /**
     * @var ChatRepository
     */
    private $chat;

    public function __construct(ChatRepository $chat)
    {
        parent::__construct();

        $this->chat = $chat;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //$chats = $this->chat->all();

        return view('chat::admin.chats.index', compact(''));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('chat::admin.chats.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $this->chat->create($request->all());

        flash()->success(trans('core::core.messages.resource created', ['name' => trans('chat::chats.title.chats')]));

        return redirect()->route('admin.chat.chat.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Chat $chat
     * @return Response
     */
    public function edit(Chat $chat)
    {
        return view('chat::admin.chats.edit', compact('chat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Chat $chat
     * @param  Request $request
     * @return Response
     */
    public function update(Chat $chat, Request $request)
    {
        $this->chat->update($chat, $request->all());

        flash()->success(trans('core::core.messages.resource updated', ['name' => trans('chat::chats.title.chats')]));

        return redirect()->route('admin.chat.chat.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Chat $chat
     * @return Response
     */
    public function destroy(Chat $chat)
    {
        $this->chat->destroy($chat);

        flash()->success(trans('core::core.messages.resource deleted', ['name' => trans('chat::chats.title.chats')]));

        return redirect()->route('admin.chat.chat.index');
    }
}

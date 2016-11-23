<?php namespace Modules\Chat\Repositories\Cache;

use Modules\Chat\Repositories\ChatRepository;
use Modules\Core\Repositories\Cache\BaseCacheDecorator;

class CacheChatDecorator extends BaseCacheDecorator implements ChatRepository
{
    public function __construct(ChatRepository $chat)
    {
        parent::__construct();
        $this->entityName = 'chat.chats';
        $this->repository = $chat;
    }
}

<?php

namespace App\Events;

use App\Podcast;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class PodcastAdded
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    /**
     * @var Podcast $podcast
     */
    public $podcast;
    public function __construct(Podcast $podcast)
    {
        $this->podcast = $podcast;
        // upload logic in listener
    }
}

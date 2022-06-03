<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class breaktime implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    public $breaks;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($breaks)
    {
        $this->breaks = $breaks;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new Channel('breaktime');
    }
}

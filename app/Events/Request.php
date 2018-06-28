<?php

namespace App\Events;
use App\Jobs\Broadcast;
use Illuminate\Http\Request;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class Requests implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    public $request;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Request $request)
    {
       $this->request = $request;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        //return new PrivateChannel('request'.$this->request->url_id);
        return new Channel('Live_requests');
    }
}

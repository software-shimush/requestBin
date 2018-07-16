<?php

namespace App\Events;
//use App\Jobs\Broadcast;
//use Illuminate\Http\Request;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Contracts\Broadcasting\ShouldBroadcastNow;
use Illuminate\Support\Facades\Auth;

class Requests implements ShouldBroadcastNow
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    public $http;
   
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($http)
    {
       $this->http = $http;
       
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        
        
        return new Channel('Live_requests');
      /* if(Auth::user()) {
            $loggedIn=Auth::user();
            $user=$loggedIn['name'];
        return new PrivateChannel('Private.'.$user);
      }
      */ 
        
    }
}


<?php

namespace App\Listeners;
use Illuminate\Http\Request;
use App\Events\Requests;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class RequestListener implements ShouldQueue
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  Request  $event
     * @return void
     */
    public function handle(Requests $event)
   
    {  //using session to store requests even after  refreshing the page
        session_start(); 
        //$_SESSION['array']=[];
        if( empty($_SESSION['array'])) {
        $_SESSION['array']=array($event);
        } else
          {
        array_push( $_SESSION['array'],$event);
        }
        
        //foreach($_SESSION['array'] as $request){
           //echo $request->method(); 
           
       // dd($_SESSION['array']);
        

           
}

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\requestHub;
use App\domain;
use App\Jobs\Broadcast;
use Illuminate\Support\Facades\Auth;
use App\Events\Requests;

class StoreRequestsController extends Controller
{ protected $requests;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     //get the binNames for the signed in user
    public function index()
    {   //get the binNames for the signed in user
        if(Auth::user()) {
        $loggedIn=Auth::user();
        $user=$loggedIn['name'];

        $bins=domain::where('user',"=" ,$user)->get();
       
        //sends to show_bins.blade, passing in bins=$bins
        return view('show_bins')->with('bins', $bins);
    }
    else{
        return view('auth/login');
    }
       
    }

    //get the binNames for the user subdomain
    public function getBins($user)
    {   
        if(Auth::user()) {
        $bins=domain::where('user',"=" ,$user)->get();
       
        //sends to show_bins.blade, passing in bins=$bins
        return view('show_bins')->with('bins', $bins);
        }
        else{
            return view('auth/login');
        }
    }


    //getting requests from the main domain
    public function fetchRequests($binName){

        $loggedIn=Auth::user();
        $User=$loggedIn['name'];
        $domain=$binName.".".$User;
        
        $requests=requestHub::where('url_id',"=",$domain )->get();
        //sends to show_requests.blade, passing in requests=$requests
        return view('show_requests')->with('requests', $requests );
    }

    //getting requests from one subdomain
    public function fetchRequests2($user,$binName){
        if(Auth::user()) {
        $domain=$binName.".".$user;
        $requests=requestHub::where('url_id',"=",$domain )->get();
        //sends to show_requests.blade, passing in requests=$requests
        return view('show_requests')->with('requests', $requests );
    }
    else{
        return view('auth/login');
    }
    }
 
//getting requests from the subdomain
    public function getRequests($binName,$User)
    {  //get all request data for the given domain
        if(Auth::user()) {
        $domain=$binName.".".$User;
        //echo $domain;
        $requests=requestHub::where('url_id',"=",$domain )->get();
        
          return view('show_requests')->with('requests', $requests );
        }
        else{
            return view('auth/login');
        }
       
       

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$binName,$User)
    {
        //$binName=Route::current()->parameter('binName');
        //$User=Route::current()->parameter('User');


         //validate that the user and binName exists in table domains
        $validate1=domain::where('user',$User);
        $validate2=domain::where('binName', $binName);
         if(!empty($validate1)&&(!empty($validate2))) {
            //store request
            $sr=new requestHub;
            $sr->username=$User;
            $sr->url_id=$binName.".".$User;
            $sr->IP_Address=$request->ip();
            $sr->method=$request->method();
            $sr->headers= json_encode($request->header());
           // var_dump($request->header());
            $sr->url_content=$request->url();
            
            $sr->query_values=implode( $request->query(), ',');
            $sr->query_keys=implode( $request->keys(), ',');
            $sr->request_body=json_encode($request->getContent());
            $sr->save();
            echo "Request saved!";
           // $httpR='testing laravel broadcasting with pusher to our view /listen';
            //fire request event to be broadcasted
           // get_object_vars  turns object into array
            event(new Requests(get_object_vars ($request)));
            //var_dump(get_object_vars ($request));
            
            }
            else {
              echo "Error! subdomain does not exist";
           }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {  
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroyPost=RequestHub::find($id); 
        $destroyPost->delete();
        
}
}

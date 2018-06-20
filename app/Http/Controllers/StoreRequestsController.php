<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\requestHub;
use App\domain;
use Illuminate\Support\Facades\Auth;

class StoreRequestsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   //get the binNames for the signed in user
        echo "You have these bins : ";
        $loggedIn=Auth::user();
        $user=$loggedIn['name'];
        $bins=domain::where('user',"=" ,$user)->get();
       
        //var_dump($bins);
       foreach($bins as $bin){
           //var_dump($bin);
           echo  $bin['binName']." ,     ";
       }
        }
    
    public function getRequests($binName,$User)
    {  //get all request data for the given domain
        $domain=$binName.".".$User;
        //echo $domain;
        $requests=requestHub::where('url_id',"=",$domain )->get();
        //var_dump( $myRequests);
        //foreach($myRequests as $one){
        /*  echo "  Request: ";
          echo( " ,domain: ". $one['url_id']);
          echo( " ,header:  ". $one['header']);
          echo( " , method :". $one['method']);
          echo ( " , url:  ". $one['url_content']);
          echo ( " , request body: ". $one['request_body']);
          echo ( " , query keys: ". $one['query_keys']);
          echo ( " , query values: ". $one['query_values']);
          */
          return view('show_requests')->with('requests', $requests );
        //}
       
        //echo $myRequests['url_id'];

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
        //
    }
}

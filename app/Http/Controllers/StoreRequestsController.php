<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\storeRequest;
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
    {   //get the url_ids for the signed in user
        echo "You have these bins";
        $bins=domain::where('user',"=" ,Auth::user())->get();
       foreach($bins as $bin){
           echo  $bin['binName']." ,     ";
       }
        }
    
    public function getRequests()
    {  //get all request data for the given ul_id (bin number)

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
    public function store(Request $request, $binName, $User)
    {
         //validate that the user and binName exists in table domains

         if(domain::where('user',"=",$User)& (domain::where('binName', "=", $binName))) {
            //store request
            $sr=new storeRequest;
    
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

<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\requestHub;
use App\domain;
use App\Jobs\Broadcast;
use Illuminate\Support\Facades\Auth;

class HeadersController extends Controller
{
    //getting headers from subdomain, displays each key value pair of the header
    public function getHeaders($binName,$User){
    if(Auth::user()) {
        $domain=$binName.".".$User;
        $requests=requestHub::where('url_id',"=",$domain )->get();
        foreach($requests as $one){
            $arrays = json_decode($one['headers'], TRUE);
           
            echo $one['method']." ";
            echo $one['url_content'];
            echo "<br>";
            echo "HEADERS";
            echo "<br>";
            foreach ($arrays as $key=>$value){
                  //return view('show_headers')->withKey($key)->withValue( $value[0] );
                echo $key. ": ";
                echo $value[0];
                echo "<br>";
           }
           echo "end of header";
           echo "<br>";
           echo "<br>";
        }
        }

    else{
    return view('auth/login');
    }
   
    }
//get all headers for a given bin
 public function headers($binName){
        
        $loggedIn=Auth::user();
        $User=$loggedIn['name'];
        $domain=$binName.".".$User;
        $requests=requestHub::where('url_id',"=",$domain )->get();
        foreach($requests as $one){
            $arrays = json_decode($one['headers'], TRUE); 
            echo $one['method']." ";
            echo $one['url_content'];
            echo "<br>";
            echo "HEADERS";
            echo "<br>";
            foreach ($arrays as $key=>$value){
                  
                echo $key. ": ";
                echo $value[0];
                echo "<br>";
           }
           echo "end of header";
           echo "<br>";
           echo "<br>";
        }
        
    }

    //get  headers for a given request from double subdomain, binName and user coming from the url
 public function headersOfRequest($binName,$user, $id){
    if(Auth::user()) {
    $request=requestHub::where(
        'id',"=",$id 
)->get();
    foreach($request as $one){
        $arrays = json_decode($one['headers'], TRUE); 
        return view('show_header')->with('header', $arrays );
        
        }
    }
    else{
        return view('auth/login');
    }
    }
//get  headers for a given request from main domain
    public function headersOfRequest2( $id){
        
       
        $request=requestHub::where(
            'id',"=",$id 
        )->get();
        foreach($request as $one){
            $arrays = json_decode($one['headers'], TRUE); 
            return view('show_header')->with('header', $arrays );
        
        }   
    }
//get  headers for a given request from one subdomain
public function headersOfRequest3($user, $id){
    if(Auth::user()) {
     $request=requestHub::where(
         'id',"=",$id 
     )->get();
     foreach($request as $one){
         $arrays = json_decode($one['headers'], TRUE); 
         return view('show_header')->with('header', $arrays );
        /*
         
         echo $one['method']." ";
        echo $one['url_content'];
        echo "<br>";
        echo "HEADERS";
        echo "<br>";
         foreach ($arrays as $key=>$value){
               
             echo $key. ": ";
             echo $value[0];
             echo "<br>";
        } */
        } 
    }
    else{
        return view('auth/login');
    }  
 }


}
<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;
use App\domain;

class Url_generatorController extends Controller
{
    public function MakeUrl(){
        //get the signed in users name
    
    $user=Auth::user();
    $user_account=$user['name'];
  
    
    $select=$_POST['binName'];  
 //get the binNames for the signed in user
   // $bins= DB::table('Url_ids')->select('binName')->where( 'username'  ,"=", $user_account)->get();

//$names=[1,2,3,4,5];
 //check if this user has already the binName, if he does, select the next name in the array of names.

   /* var_dump($bins);
    foreach ($bins as $bin){
        foreach($bins as $bi) {
            
                if(in_array($bi,$names)){
        
                $select= (int)$bi;
                break 2;
                }
            }
        }
    */
    //create new entry in db
    $url=new domain;
    
    $url->user=$user_account;
    $url->binName=$select;
    $url->save();
    
    echo "this bins url:" .$select.'.'.$user_account.'.'.'requestBin.local';
    }
}
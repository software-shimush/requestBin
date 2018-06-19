<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Url_id;

class Url_generatorController extends Controller
{
    public function url(){
    $url=rand(10,1000000);
    
    $User=new Url_id;
    $User->username=Auth::id();
    $User->url_id=$url;
   
    $User->binName='default';
    $User->save();
    return url('/'.$url);
    }
}
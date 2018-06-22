@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1> Your Bins </h1>
        </div>
        </div>
        <div class="row justify-content-center">
        <div class="col-md-8">
            <ul>
            @foreach ($bins as $bin)
                <div class="row">
                <li class= "binLi"><div class="col-sm-6"><?php echo $bin['binName']; ?></div>
                <div class="col-sm-6"> <a  class="btn" href="getRequests/<?php echo ''.$bin['binName'];?> ">
                {{ __('View Requests') }}
                                            </a></div>
                </li>
                </div>  
            @endforeach
            </ul>
        </div>
    </div>
</div>

@endsection
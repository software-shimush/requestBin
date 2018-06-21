@extends('layouts.app')
@section('content')
<ul>
@foreach ($bins as $bin)
    
    <li><?php echo $bin['binName']; ?>
    <a  class="btn" href="fetchRequests/<?php echo ''.$bin['binName'];?> ">
    {{ __('View Requests') }}
                                </a>
    </li>
     
                                
    

</ul>
@endforeach
@endsection
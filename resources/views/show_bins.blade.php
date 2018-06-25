@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row ">
        <div class="col-md-12 text-center">
            <h1> Your Bins </h1>
        </div>
        </div>
        <div class="row justify-content-center">
        <div class="col-md-4">
            <ul class="list-group">
            @foreach ($bins as $bin)
                <li class= "list-group-item">
                <div class="row justify-content-center">
                <div class="col-md-6 listName">
                        <?= $bin['binName']; ?>
                    
                    </div>
                    <div class="col-md-6">
                        <a href="getRequests/<?php echo ''.$bin['binName'];?> " id="<?php echo $bin['binName'];?>" class="btn btn-info">
                            VIEW REQUESTS
                        </a>
                    </div>
                    </div>
                </li>  
            @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection
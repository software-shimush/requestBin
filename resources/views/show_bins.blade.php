@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1> You're Bins </h1>
        </div>
        </div>
        <div class="row justify-content-center">
        <div class="col-md-8">
            <ul>
            @foreach ($bins as $bin)
                <div class="row justify-content-center">
                <li class= "binLi" style="width:100%">
                <div class="col-md-6">
                        <?= $bin['binName']; ?>
                    
                    </div>
                    <div class="col-md-6">
                        <a href="getRequests/<?php echo ''.$bin['binName'];?> ">
                            <button type="submit" name="submit" id="<?php echo $bin['binName'];?>"  value="">
                                VIEW REQUESTS
                            </button>
                        </a>
                    </div>
                </li>
                </div>  
            @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection
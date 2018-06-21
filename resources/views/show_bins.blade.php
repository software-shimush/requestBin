@extends('layouts.app')
@section('content')
<ul>
@foreach ($bins as $bin)

    <li><?php echo $bin['binName']; ?>  
   <a href= "getRequests/<?php echo ''.$bin['binName']; ?>" > <button type="submit" name="submit" id="<?php echo $bin['binName'];?>"  value="">VIEW REQUESTS</button></a>
    </li>
    
                               
    
     
                                
    

@endforeach
</ul>
@endsection
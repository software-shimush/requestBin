@extends('layouts.app')
@section('content')
<ul>
@foreach ($bins as $bin)
    
    <li><?php echo $bin['binName']; ?></li>
    

</ul>
@endforeach
@endsection
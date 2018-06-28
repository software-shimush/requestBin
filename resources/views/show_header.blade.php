@extends('layouts.app')

@section('content')


        <br>
        <h1> HEADER</h1>
        <br>
        <ul>
        @foreach ($header as $key=>$value)
            <li><?php echo $key. ": ". str_replace(",","  ,  ",
$value[0]); ?></li>
            <br>
       @endforeach

@endsection
@extends('layouts.app')
@section('content')

<div id="app">

<request-listener
v-for="request in requests"
v-bind:request="request"
v-bind:key="1"
></request-listener>
</div>

@endsection
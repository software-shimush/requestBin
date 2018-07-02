
@extends('layouts.app')

@section('content')
<script src="js/app.js"></script>
<div id="app">

<RequestComponent v-bind="requests"></RequestComponent>
</div>
@endsection
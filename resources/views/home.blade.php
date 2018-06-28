@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="row text-center">
                        <div class="col-sm-12">
                Welcome to our website Request Bin. Here you can create a personal url to store all your requests and view them at a later time.
                You can access your bins at either requestbin.local or /username/requestbin.local.
</div>    
            </div>
                <div id="btnRow" class="row text-center">
                    <div class="col-sm-6">
                        <a class="btn btn-info" href="{{ url('/getBins') }}">{{ __('View Bins') }}</a>
                    </div>
                    <div class="col-sm-6">
                        <a class="btn btn-info" href="{{ url('/createBin') }}">{{ __('Create Bin') }}</a>
                    </div>     
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

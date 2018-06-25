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
                Welcome to our website Requests Bin. Here you can create a personal url to store all your requests and view them at a later time.
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

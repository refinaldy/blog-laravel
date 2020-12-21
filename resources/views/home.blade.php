@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <h4>Hi, {{ Auth::user()->name }}</h4>
                        
                    {{ __('You are logged in!') }}
                    <br>
                    <a href="/article" class="btn btn-info btn-sm"><h4>Show Article</h4></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

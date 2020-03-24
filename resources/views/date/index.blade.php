@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Click a date to open the report</div>

                <div class="card-body">
                    @foreach($dates as $date)
                        <p><a href="/dates/{{ $date->id }}">{{ $date['date'] }}</a></p>
                    @endforeach
                
                <a href="/" class="btn btn-dark">Home</a>
                </div>
            </div>
        </div>
    </div>
    
</div>
@endsection
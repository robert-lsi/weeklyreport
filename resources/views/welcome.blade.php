@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Robs Weekly Report</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                        <!-- <a href="/reports/create" class="btn btn-dark">Create New Report</a> -->
                        <a href="/dates/create" class="btn btn-dark">Create New Report</a>
                        <a href="/dates" class="btn btn-dark">Load Reports</a>
                </div>
            </div>
        </div>
    </div>
    
</div>
@endsection
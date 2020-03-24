@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create new Report</div>

                <div class="card-body">
                    <form action="/reports" method="post">
                    @csrf
                        <div class="form-group">
                            <label for="content">Content</label>
                            <input name="content" type="text" class="form-control" id="content" aria-describedby="contentHelp" placeholder="Enter content">
                            <small id="contentHelp" class="form-text text-muted">Give your report some weekly content.</small>

                            @error('content')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="date">Date</label>
                            <input type="date" name="date">
                            <small id="dateHelp" class="form-text text-muted">Give your report a start date.</small>

                            @error('date')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Save Report</button>
                    
                    </form>
                
                </div>
            </div>
        </div>
    </div>
    
</div>
@endsection
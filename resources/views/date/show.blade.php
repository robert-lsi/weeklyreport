@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Report for {{ $date->date }}</div>

                <div class="card-body">
                    <a href="/" class="btn btn-dark">Home</a>
                    <!-- <a href="#" class="btn btn-dark">Add Category</a> -->
                    <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#exampleModal">
                        Add Category
                    </button>
                    <a href="/dates" class="btn btn-dark">Reports</a>
                    <hr>
                    @foreach($date->reports as $report)
                        <h3>{{ $report->category->name }}</h3>
                        <p>{{ $report->content }}</p>
                    @endforeach
                    
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Category</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="/dates/report" method="post"></form>
                    <div class="modal-body">
                    
                    @csrf
                        @foreach($categories as $category)
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="{{ $category->id }}" id="{{ $category->id }}" value="option1">
                                <label class="form-check-label" for="{{ $category->id }}">
                                    {{ $category->name }}
                                </label>
                            </div>
                        @endforeach
                        <hr>
                        <div class="form-group">
                            <label for="content">Content:</label>
                            <textarea class="form-control" id="content" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Add Category</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-5 rounded">
        <h1>Book Create</h1>
        <form action="/book/createperform" method="POST">
            @csrf
            <div class="form-group mb-3">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" placeholder="Enter name">
            </div>
            <div class="form-group mb-3">
                <label for="year">Year</label>
                <input type="number" class="form-control" name="year" placeholder="Enter year">
            </div>
            <div class="form-group mb-3">
                <label for="writer">Writer</label>
                <input type="text" class="form-control" name="writer" placeholder="Enter writer">
            </div>
            <div class="form-group mb-3">
                <label for="pages">Pages</label>
                <input type="number" class="form-control" name="pages" placeholder="Enter pages">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection

@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-5 rounded">
        <h1>Book Update</h1>
        <form action="/book/updateperform" method="POST">
            @csrf
            <input type="text" name="id" value="{{ $data->id }}">
            <div class="form-group mb-3">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" placeholder="Enter name" value="{{ $data->name }}">
            </div>
            <div class="form-group mb-3">
                <label for="year">Year</label>
                <input type="number" class="form-control" name="year" placeholder="Enter year" value="{{ $data->year }}">
            </div>
            <div class="form-group mb-3">
                <label for="writer">Writer</label>
                <input type="text" class="form-control" name="writer" placeholder="Enter writer" value="{{ $data->writer }}">
            </div>
            <div class="form-group mb-3">
                <label for="pages">Pages</label>
                <input type="number" class="form-control" name="pages" placeholder="Enter pages" value="{{ $data->pages }}">
            </div>
            <button type="submit" class="btn btn-warning">Update</button>
        </form>
    </div>
@endsection

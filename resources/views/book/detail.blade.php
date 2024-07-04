@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-5 rounded">
        <h1>Book Detail</h1>
        <input type="text" name="id" value="{{ $data->id }}" readonly>
        <div class="form-group mb-3">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" placeholder="Enter name" value="{{ $data->name }}" readonly>
        </div>
        <div class="form-group mb-3">
            <label for="year">Year</label>
            <input type="number" class="form-control" name="year" placeholder="Enter year" value="{{ $data->year }}" readonly>
        </div>
        <div class="form-group mb-3">
            <label for="writer">Writer</label>
            <input type="text" class="form-control" name="writer" placeholder="Enter writer" value="{{ $data->writer }}" readonly>
        </div>
        <div class="form-group mb-3">
            <label for="pages">Pages</label>
            <input type="number" class="form-control" name="pages" placeholder="Enter pages" value="{{ $data->pages }}" readonly>
        </div>
    </div>
@endsection

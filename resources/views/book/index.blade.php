@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-5 rounded">
        <h1>Book</h1>
        <a href="/book/create">Create New</a>
        <br><br>
        <table class="table table-striped">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Year</th>
                <th scope="col">Writer</th>
                <th scope="col">Pages</th>
                <th scope="col">Created At</th>
                <th scope="col">Updated At</th>
                <th scope="col">Action</th>

            </tr>
            @foreach ($data as $item)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->year }}</td>
                    <td>{{ $item->writer }}</td>
                    <td>{{ $item->pages }}</td>
                    <td>{{ $item->created_at }}</td>
                    <td>{{ $item->updated_at }}</td>
                    <td>
                        <a href="/book/detail?id={{ $item->id }}">Detail</a>
                        <a href="/book/update?id={{ $item->id }}">Update</a>
                        <a href="/book/delete?id={{ $item->id }}">Delete</a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection

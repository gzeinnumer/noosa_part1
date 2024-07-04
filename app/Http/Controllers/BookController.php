<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BookModel;

class BookController extends Controller
{
    function index()
    {
        $data = BookModel::get();
        return view('book.index', compact('data'));
    }

    function create()
    {
        return view('book.create');
    }

    function detail(Request $r)
    {
        $data = BookModel::find($r->id);
        return view('book.detail', compact('data'));
    }

    function createperform(Request $r)
    {
        $data = new BookModel();
        $data->name = $r->name;
        $data->year = $r->year;
        $data->writer = $r->writer;
        $data->pages = $r->pages;
        $data->save();

        return redirect('/book');
    }

    function update(Request $r)
    {
        $data = BookModel::find($r->id);
        return view('book.update', compact('data'));
    }

    function updateperform(Request $r)
    {
        $data = BookModel::find($r->id);
        $data->name = $r->name;
        $data->year = $r->year;
        $data->writer = $r->writer;
        $data->pages = $r->pages;
        $data->save();

        return redirect('/book');
    }

    function delete(Request $r)
    {
        $data = BookModel::find($r->id);
        return view('book.delete', compact('data'));
    }

    function deleteperform(Request $r)
    {
        $data = BookModel::find($r->id);
        $data->delete();

        return redirect('/book');
    }
}

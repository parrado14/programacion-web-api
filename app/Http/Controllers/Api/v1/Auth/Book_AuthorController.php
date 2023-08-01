<?php

namespace App\Http\Controllers\Api\v1\Auth;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Api\v1\Controller;

class Book_Author extends Controller
{
    public function index()
    {
            $book_author = Book_Author::all();

            return response()->json(['success' => true, 'data' => $book_author]);
    }
    
    public function show($id)
    {
        $book_author = Book_Author::find($id);

        return $this->checkModelExists(function () use ($book_author) {
            return response()->json(['success' => true, 'data' => $book_author]);
        }, $book_author, trans('messages.book.not_found'));
    }

    public function store(Request $request)
    {
        $book_author = Book_Author::create($request->all());

        return response()->json(['success' => true, 'message' => trans('messages.book.created'), 'data' => $book_author]);
    }

    public function update(Request $request, $id)
    {
        $book_author = Book_Author::find($id);

        return $this->checkModelExists(function () use ($book_author, $request) {
        $book_author->update($request->all());

        return response()->json(['success' => true, 'message' => trans('messages.book.updated'), 'data' => $book_author]);
        }, $book_author, 'el libro no existe');
    }

    public function destroy($id)
    {
        $book_author = Book_Author::find($id);

        return $this->checkModelExists(function () use ($book_author) {
        $book_author->delete();

        return response()->json(null, Response::HTTP_NO_CONTENT);
        }, $book_author, 'el libro no existe');
    }
}

<?php
namespace App\Http\Controllers\Api\v1;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Api\v1\Controller;

class CategoriesController extends Controller
{
    public function index()
    {
            $categories = Category::all();

            return response()->json(['success' => true, 'data' => $categories]);
    }

    public function show($id)
    {
        $categories = Category::find($id);

        return $this->checkModelExists(function () use ($categories) {
            return response()->json(['success' => true, 'data' => $categories]);
        }, $categories, trans('messages.book.not_found'));
    }

    /*public function store(Request $request)
    {
        $categories = Category::create($request->all());

        return response()->json(['success' => true, 'message' => trans('messages.book.created'), 'data' => $categories]);
    }

    public function update(SaveBookRequest $request, $id)
    {
        $book = Book::find($id);

        return $this->checkModelExists(function () use ($book, $request) {
        $book->update($request->all());

        return response()->json(['success' => true, 'message' => trans('messages.book.updated'), 'data' => $book]);
        }, $book, 'el libro no existe');
    }

    public function destroy($id)
    {
        $book = Book::find($id);

        return $this->checkModelExists(function () use ($book) {
        $book->delete();

        return response()->json(null, Response::HTTP_NO_CONTENT);
        }, $book, 'el libro no existe');
    }*/
}

<?php

namespace App\Http\Controllers\Api\v1;

use Exception;
use App\Models\Author;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\SaveAuthorRequest;


class AuthorController extends Controller
{
    public function index ()
    {
        try {
            $authors = Author::all();

            return response()-> json(['success' => true, 'data' => $authors]);
        } catch (Exception $e) {
            Log::error($e->getMessage() . ' line: ' . $e->getline() . 'file: ' . $e->getFile());

            return response()->json([
                'success' => false,
                'message' => 'Error de servidor',
                'info' => [
                    'info error' => $e->getMessage(),
                    'file' => $e->getFile(),
                    'line' => $e->getLine(),
                ]
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function show($id)
    {

    $author = Author::find($id);

        return $this->checkModelExists(function () use ($author) {
            return response()->json(['success' => true, 'data' => $author]);
        }, $author, trans('messages.author.not_found'));
    }

    public function store(SaveAuthorRequest $request)
    {
        $author  = Author::create($request->all());

        return response()->json(['success' => true, 'message' => trans('messages.author.created'), 'data' => $author]);
    }

    public function update(SaveAuthorRequest  $request, $id)
    {
        $author = Author::find($id);

        return $this->checkModelExists(function () use ($author, $request) {
        $author->update($request->all());

        return response()->json(['success' => true, 'message' => trans('messages.author.updated'), 'data' => $author]);
        }, $author, 'el autor no existe');
    }

    public function destroy($id)
    {
        $author = Author::find($id);

        return $this->checkModelExists(function () use ($author) {
        $author->delete();

        return response()->json(null, Response::HTTP_NO_CONTENT);
        }, $author, 'el autor no existe');
    }
}

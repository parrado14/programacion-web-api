<?php
    
namespace App\Http\Controllers;

use Exception;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Log;

class BookController extends Controller
{
    public function index ()
    {   
        try {
        $books = Book::all();

        return response()->json(['success' => true, 'data' => $books]); 
    } catch (Exception $e) {
            Log:: error($e->getMessage() . 'line: ' . $e->getLine() . ' file: ' . $e->getfile());

            return response()->json([
            'success' => false,    
            'message'=> 'Error de servidor',
             'info' => $e->getMessage()
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
    public function show($id)
    {
        try {
            $book = Book::find($id);

            return response()->json(['success' => true, "data" => $book]);
        } catch (Exception $e) {
            Log::error($e->getMessage() . ' line: ' . $e->getline() . ' file: ' . $e->getFile());

            return response()->json([
                'success' => false,
                'message' => 'Error de servidor',
                'info' => $e->getMessage()
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }   
}    
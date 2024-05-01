<?php

namespace App\Http\Controllers\Api;

use App\Models\Book;
use Illuminate\Http\Request;
use App\Services\BookService;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBookRequest;

class BookController extends Controller
{
    public function __construct(
        private BookService $bookService,
    ) {
    }

    public function index()
    {
        return $this->bookService->getAllBook();
    }

    public function store(StoreBookRequest $request)
    {
        $bookRequest = $request->validated();
        $bookSaved = $this->bookService->storeBook($bookRequest);
        if ($bookSaved) {
            return \response()->json("Book created successfully", 201);
        }
    }

    public function show(Book $book)
    {
        //
    }

    public function update(Request $request, Book $book)
    {
        //
    }

    public function destroy(Book $book)
    {
        //
    }
}

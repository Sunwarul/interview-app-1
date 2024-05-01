<?php

namespace App\Services;

use App\Models\Book;

class BookService
{
    public function getAllBook()
    {
        return Book::paginate();
    }

    public function storeBook(array $bookRequest)
    {
        return Book::create($bookRequest);
    }
}

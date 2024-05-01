<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Tag;
use App\Models\Writer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Writer::factory(10)->create();
        Tag::factory(10)->create();
        Book::factory(20)->create();
    }
}

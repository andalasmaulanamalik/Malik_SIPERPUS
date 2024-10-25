<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;
use App\Models\Bookshelf;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $bookshelf = Bookshelf::pluck("id");
        Book::create([
            'title' => 'jaringan komputer v1',
            'author' => 'sahdan vegan',
            'tahun' => 2012,
            'publisher' => 'kompas',
            'city' => 'bogor',
            'cover' => 'https://tokopedia.com',
            'bookshelf_id' => $bookshelf[random_int(1, count($bookshelf))],
        ]);
    }
}

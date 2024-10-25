<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Bookshelf;

class bookshelfSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('bookshelves')->insert([
            [
                'code' => 'TIK-010',
                'name'=> 'Jaringan Komputer'
            ],
            [
                'code' => 'IPA-010',
                'name'=> 'Flora dan Fauna'
            ],
            [
                'code' => 'IPS-010',
                'name'=> 'Sosialisasi'
            ]
        ]);

        Bookshelf::create([
            'code' => 'MTK-010',
            'name' => 'Aritmatika'
        ]);
    }
}

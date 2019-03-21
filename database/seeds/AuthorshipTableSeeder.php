<?php

use Illuminate\Database\Seeder;

class AuthorshipTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('authorship')->insert([
            [
                'author_id' => 1,
                'book_id' => 1,
            ],
            [
                'author_id' => 2,
                'book_id' => 1,
            ],
            [
                'author_id' => 3,
                'book_id' => 2,
            ],
            [
                'author_id' => 3,
                'book_id' => 3,
            ],
            [
                'author_id' => 4,
                'book_id' => 4,
            ],
            [
                'author_id' => 5,
                'book_id' => 5,
            ],
        ]);
    }
}

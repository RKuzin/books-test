<?php

use Illuminate\Database\Seeder;

class AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('authors')->insert([
            [
                'name' => 'Илья',
                'surname' => 'Ильф',
            ],
            [
                'name' => 'Евгений',
                'surname' => 'Петров',
            ],
            [
                'name' => 'Лев',
                'surname' => 'Толстой',
            ],
            [
                'name' => 'Стивен',
                'surname' => 'Кинг',
            ],
            [
                'name' => 'Рей',
                'surname' => 'Брэдбери',
            ],
        ]);
    }
}

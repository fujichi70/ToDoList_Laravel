<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TodolistsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Todolists')->insert([
            'title' => 'test title 1',
            'content' => 'test content 1'
        ]);
        DB::table('Todolists')->insert([
            'title' => 'test title 2',
            'content' => 'test content 2'
        ]);
        DB::table('Todolists')->insert([
            'title' => 'test title 3',
            'content' => 'test content 3'
        ]);
    }
}

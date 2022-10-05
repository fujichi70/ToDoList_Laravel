<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TodolistsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         for($i = 1; $i <= 100; $i++) {
            DB::table('todolists')->insert([
                'title' => 'test title ' . $i,
                'content' => 'test content ' . $i
            ]);
        }
    }
}

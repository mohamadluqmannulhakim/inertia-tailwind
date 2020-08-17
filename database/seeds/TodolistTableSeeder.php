<?php

use Illuminate\Database\Seeder;

class TodolistTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\ToDoList::class, 30)->create();
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Author;
use \App\Models\Person;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Author::factory(10)->create();
        $this->call(AuthorsTableSeeder::class);
        Person::factory(10)->create();
    }
}

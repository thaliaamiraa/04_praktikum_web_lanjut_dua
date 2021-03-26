<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Home;
use App\Models\News;
use App\Models\Product;
use App\Models\Program;
Use App\Models\Contact;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            HomeSeeder::class,
        ]);

        $this->call([
            NewsSeeder::class,
        ]);

        $this->call([
            ProductSeeder::class,
        ]);

        $this->call([
            ProgramSeeder::class,
        ]);
        
        $this->call([
            AboutSeeder::class,
        ]);

        $this->call([
            ContactSeeder::class,
        ]);
    }

}

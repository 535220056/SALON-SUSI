<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Call the CategorySeeder
        $this->call(CategorySeeder::class);
        
        // Uncomment or add other seeders as needed
        // $this->call(AdminSeeder::class);
    }
}

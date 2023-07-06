<?php

namespace Database\Seeders;
use App\Models\Category;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;


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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        /*
        tecnology; electronics; fashion; books; home; sports; toys; beauty
        */

        $categoryUno = new Category();
        $categoryUno->name = "Technology";
        $categoryUno->save();

        $categoryDos = new Category();
        $categoryDos->name ="Electronics";
        $categoryDos->save();

        $categoryTres = new Category();
        $categoryTres->name ="Fashion";
        $categoryTres->save();

        $categoryCuatro = new Category();
        $categoryCuatro->name = "Books";
        $categoryCuatro->save();

        $categoryCinco = new Category();
        $categoryCinco->name = "Healt";
        $categoryCinco->save();
        
    }
}

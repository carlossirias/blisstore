<?php

namespace Database\Seeders;
use App\Models\Category;
use App\Models\Language;

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
        $categoryCinco->name = "Health";
        $categoryCinco->save();

        //Countries

        $countryTres = new Language();
        $countryTres->notation ="NI";
        $countryTres->country ="Nicaragua";
        $countryTres->save();

        $countryUno = new Language();
        $countryUno->notation = "PN";
        $countryUno->country = "Panama";
        $countryUno->save();

        $countryDos = new Language();
        $countryDos->notation ="CR";
        $countryDos->country ="Costa Rica";
        $countryDos->save();

        $countryCuatro = new Language();
        $countryCuatro->notation = "HN";
        $countryCuatro->country = "Honduras";
        $countryCuatro->save();

        $countryCinco = new Language();
        $countryCinco->notation = "SV";
        $countryCinco->country = "El Salvador";
        $countryCinco->save();

        $countrySeis = new Language();
        $countrySeis->notation = "GT";
        $countrySeis->country = "Guatemala";
        $countrySeis->save();
    }
}

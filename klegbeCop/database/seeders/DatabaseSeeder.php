<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Category;
use App\Models\Souscategory;
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
        \App\Models\User::factory(50)->create();
        \App\Models\Article::factory(50)->create();

        $categories = [
            'Livre',
            'Music , DVD , et Blu-ray',
            'Jeux vidéo et Consoles',
            ' High-tech',
            'Informatique et bureau',
            'Jouets , Enfants et Bébés',
            'Cuisine et Maison',
            'Bricolage, Jardin et Animalerie',
            'Beauté , Santé et Bien être',
            'Sport et Loisirs',
            'Automobile et industries'
        ];
        foreach ($categories as $key => $value) {
            # code...
            Category::create([
                'name' => $value,
                'slug' => $value,
            ]);
        }

        $soucategories = [ 'Mobillier de jardin  et Parasol',
        'Home cinéma , Hifi',
        'Barbecue et Piscine',
    'Playstation ,Xbox'];

    foreach ($soucategories as $key => $value) {
        # code...

        Souscategory::create([
            'name'=>$value,
            'slug'=>$value,
            'category_id'=>mt_rand(1,5)
        ]);
    }
    // $articles =[

    // ];

    // foreach ($articles as $key => $value) {
    //     # code...

    //     Article::create([

    //     ]);
    // }

    }
    
}

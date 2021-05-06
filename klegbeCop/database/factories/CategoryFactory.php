<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Category::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        $products =[
            'Livre',
            'Music , DVD , et Blu-ray' ,
            'Jeux vidéo et Consoles',
           ' High-tech',
           'Informatique et bureau',
           'Jouets , Enfants et Bébés',
           'Cuisine et Maison',
           'Bricolage, Jardin et Animalerie',
           'Beauté , Santé et Bien être',
           'Sport et Loisirs'

        ];
        return [
            'name' => $this->faker->$this->array_product(),
            //
        ];
    }
}

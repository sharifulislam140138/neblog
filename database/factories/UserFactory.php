<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});

$factory->define(App\Category::class, function (Faker $faker) {
    
    return [
        'name' => $faker->name,
        'slug' =>Str::slug($faker->word()),
       
        
    ];
});


$factory->define(App\Tag::class, function (Faker $faker) {
    
    return [
        'name' => $faker->name,
        'slug' =>Str::slug($faker->word()),
       
        
    ];
});

$factory->define(App\Post::class, function (Faker $faker) {
    return [
 'title' => $faker->name,
  'slug' =>Str::slug($faker->word()),
   'description' => $this->faker->sentence,
   'image'       => $this->faker->image('public/admin/img/', 400, 300, null, false),
    
       

    
    ];
});
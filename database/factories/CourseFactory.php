<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Course;
use Faker\Generator as Faker;

$factory->define(Course::class, function (Faker $faker) {
    $startDate = $faker->date;
    $endDate = date("Y-m-d" , strtotime($startDate."+ " . rand(1,12) ." months")); // enddate random 1-12 months ahead from starting date
    return [
        'name' => $faker->word,
        'description' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'start' => $startDate,
        'end' => $endDate,
        'tags' => $faker->word,
        'instructor_id' => $faker->unique()->numberBetween(1,5)

    ];
});

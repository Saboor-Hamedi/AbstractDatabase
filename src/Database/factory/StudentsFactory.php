<?php

namespace AbstractDatabase\Database\factory;

use AbstractDatabase\Models\Students;
use AbstractDatabase\Models\Users;
use Faker\Factory as Faker;

class StudentsFactory
{
  protected $faker;

  public function __construct()
  {
    $this->faker = Faker::create();
  }
  public function create(): ?Students
  {
    // Find a random user with role ID 1
    $userWithRole1 = Users::where('roles', 1)->inRandomOrder()->first();
    $data = [
      'student_id' => $this->faker->randomElement([12,$userWithRole1->id]),
      'lastname' => $this->faker->lastName,
      'age' => $this->faker->randomElement([5, 18]),
      'sex' => $this->faker->randomElement(['male', 'female']),
    ];
    // Create a new student record
    $student = Students::updateOrCreate($data);
    return $student;
  }
  public function dd($arg)
  {
    echo '<pre>';
    var_dump($arg);
    echo '</pre>';
  }
}

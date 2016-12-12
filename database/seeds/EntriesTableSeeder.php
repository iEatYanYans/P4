<?php

use Illuminate\Database\Seeder;

class EntriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        DB::table('entries')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'time_slept' => $faker->dateTimeThisMonth($max='now'), //Look into adding a 'hours_slept' row
          'time_woken' => $faker->dateTimeThisMonth($max='now'),
          'room_temperature' => '80',
          'notes' => 'I dreamt about horses',
        ]);

        DB::table('entries')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'time_slept' => $faker->dateTimeThisMonth($max='now'), //Look into adding a 'hours_slept' row
          'time_woken' => $faker->dateTimeThisMonth($max='now'),
          'room_temperature' => '80',
          'notes' => 'I dreamt about sheeps',
        ]);

        DB::table('entries')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'time_slept' => $faker->dateTimeThisMonth($max='now'), //Look into adding a 'hours_slept' row
          'time_woken' => $faker->dateTimeThisMonth($max='now'),
          'room_temperature' => '80',
          'notes' => 'I dreamt about bunnies',
        ]);
    }
}

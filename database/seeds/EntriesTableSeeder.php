<?php

use Illuminate\Database\Seeder;

class EntriesTableSeeder extends Seeder
{

    public function run()
    {

        DB::table('entries')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'time_slept' => '2016-12-06 20:00:00',
          'time_woken' => '2016-12-07 06:00:00',
          'room_temperature' => '80',
          'temperature_constant' => 'Fahrenheit',
          'notes' => 'I dreamt about horses',
          'hours_slept' => '10',
          'user_id' => 1,
        ]);

        DB::table('entries')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'time_slept' => '2016-12-07 22:30:00',
          'time_woken' => '2016-12-08 06:00:00',
          'room_temperature' => '80',
          'temperature_constant' => 'Fahrenheit',
          'notes' => 'I dreamt about sheeps',
          'hours_slept' => '7.5',
          'user_id' => 1,
        ]);

        DB::table('entries')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'time_slept' => '2016-12-08 23:30:00',
          'time_woken' => '2016-12-09 06:00:00',
          'room_temperature' => '80',
          'temperature_constant' => 'Fahrenheit',
          'notes' => 'I dreamt about sheeps',
          'hours_slept' => '6.5',
          'user_id' => 1,
        ]);

        DB::table('entries')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'time_slept' => '2016-12-09 23:00:00',
          'time_woken' => '2016-12-10 02:00:00',
          'room_temperature' => '80',
          'temperature_constant' => 'Fahrenheit',
          'notes' => 'I dreamt about bunnies',
          'hours_slept' => '3',
          'user_id' => 1,
        ]);

        DB::table('entries')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'time_slept' => '2016-12-10 20:00:00',
          'time_woken' => '2016-12-11 20:00:00',
          'room_temperature' => '80',
          'temperature_constant' => 'Fahrenheit',
          'notes' => 'Hello',
          'hours_slept' => '24',
          'user_id' => 1,
        ]);

        DB::table('entries')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'time_slept' => '2016-12-11 23:00:00',
          'time_woken' => '2016-12-12 09:00:00',
          'room_temperature' => '80',
          'temperature_constant' => 'Fahrenheit',
          'notes' => 'Hello',
          'hours_slept' => '10',
          'user_id' => 1,
        ]);

        DB::table('entries')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'time_slept' => '2016-12-12 21:00:00',
          'time_woken' => '2016-12-13 06:15:00',
          'room_temperature' => '70',
          'temperature_constant' => 'Celsius',
          'notes' => 'I feel code',
          'hours_slept' => '9.25',
          'user_id' => 1,
        ]);

        DB::table('entries')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'time_slept' => '2016-12-13 23:00:00',
          'time_woken' => '2016-12-14 09:00:00',
          'room_temperature' => '80',
          'temperature_constant' => 'Fahrenheit',
          'notes' => 'We\'re out of rum.' ,
          'hours_slept' => '10',
          'user_id' => 1,
        ]);

        DB::table('entries')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'time_slept' => '2016-12-14 23:30:00',
          'time_woken' => '2016-12-15 09:00:00',
          'room_temperature' => '80',
          'temperature_constant' => 'Fahrenheit',
          'notes' => 'We\'re out of rum.' ,
          'hours_slept' => '9.5',
          'user_id' => 1,
        ]);

        DB::table('entries')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'time_slept' => '2016-12-15 20:00:00',
          'time_woken' => '2016-12-16 10:00:00',
          'room_temperature' => '80',
          'temperature_constant' => 'Fahrenheit',
          'notes' => 'I dreamt about bunnies',
          'hours_slept' => '14',
          'user_id' => 1,
        ]);

        DB::table('entries')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'time_slept' => '2016-12-16 20:00:00',
          'time_woken' => '2016-12-17 5:00:00',
          'room_temperature' => '80',
          'temperature_constant' => 'Fahrenheit',
          'notes' => 'I dreamt about bunnies',
          'hours_slept' => '9',
          'user_id' => 1,
        ]);

        DB::table('entries')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'time_slept' => '2016-12-17 22:00:00',
          'time_woken' => '2016-12-18 08:00:00',
          'room_temperature' => '80',
          'temperature_constant' => 'Fahrenheit',
          'notes' => 'Waldo is at McDonalds',
          'hours_slept' => '10',
          'user_id' => 1,
        ]);


        DB::table('entries')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'time_slept' => '2016-12-06 20:00:00',
          'time_woken' => '2016-12-07 06:00:00',
          'room_temperature' => '80',
          'temperature_constant' => 'Fahrenheit',
          'notes' => 'I dreamt about horses',
          'hours_slept' => '10',
          'user_id' => 2,
        ]);

        DB::table('entries')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'time_slept' => '2016-12-07 22:30:00',
          'time_woken' => '2016-12-08 06:00:00',
          'room_temperature' => '80',
          'temperature_constant' => 'Fahrenheit',
          'notes' => 'I dreamt about sheeps',
          'hours_slept' => '7.5',
          'user_id' => 2,
        ]);

        DB::table('entries')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'time_slept' => '2016-12-09 23:00:00',
          'time_woken' => '2016-12-10 02:00:00',
          'room_temperature' => '80',
          'temperature_constant' => 'Fahrenheit',
          'notes' => 'I dreamt about bunnies',
          'hours_slept' => '3',
          'user_id' => 2,
        ]);

        DB::table('entries')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'time_slept' => '2016-12-10 20:00:00',
          'time_woken' => '2016-12-11 20:00:00',
          'room_temperature' => '80',
          'temperature_constant' => 'Fahrenheit',
          'notes' => 'Hello',
          'hours_slept' => '24',
          'user_id' => 2,
        ]);

        DB::table('entries')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'time_slept' => '2016-12-12 21:00:00',
          'time_woken' => '2016-12-13 06:15:00',
          'room_temperature' => '70',
          'temperature_constant' => 'Celsius',
          'notes' => 'I feel code',
          'hours_slept' => '9.25',
          'user_id' => 2,
        ]);

        DB::table('entries')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'time_slept' => '2016-12-13 23:00:00',
          'time_woken' => '2016-12-14 09:00:00',
          'room_temperature' => '80',
          'temperature_constant' => 'Fahrenheit',
          'notes' => 'We\'re out of rum.' ,
          'hours_slept' => '10',
          'user_id' => 2,
        ]);

        DB::table('entries')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'time_slept' => '2016-12-15 20:00:00',
          'time_woken' => '2016-12-16 10:00:00',
          'room_temperature' => '80',
          'temperature_constant' => 'Fahrenheit',
          'notes' => 'I dreamt about bunnies',
          'hours_slept' => '14',
          'user_id' => 2,
        ]);

        DB::table('entries')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'time_slept' => '2016-12-17 22:00:00',
          'time_woken' => '2016-12-18 08:00:00',
          'room_temperature' => '80',
          'temperature_constant' => 'Fahrenheit',
          'notes' => 'Waldo is at McDonalds',
          'hours_slept' => '10',
          'user_id' => 2,
        ]);
    }
}

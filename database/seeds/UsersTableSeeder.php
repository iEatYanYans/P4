<?php

use Illuminate\Database\Seeder;
use \App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
     {

         # Define the users you want to add
         $users = [
             ['jill@harvard.edu','Jill','Doe','helloworld', 'Female'], # <-- Required for P4
             ['jamal@harvard.edu','Jamal','Doe','helloworld', 'Male'], # <-- Required for P4
         ];

         # Get existing users to prevent duplicates
         $existingUsers = User::all()->keyBy('email')->toArray();

         foreach($users as $user) {

             # If the user does not already exist, add them
             if(!array_key_exists($user[0],$existingUsers)) {
                 $user = User::create([
                     'email' => $user[0],
                     'first_name' => $user[1],
                     'last_name' => $user[2],
                     'password' => Hash::make($user[3]),
                     'gender' => $user[4],
                 ]);
             }
         }
     }
}

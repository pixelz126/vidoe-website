<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class Users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
        	'name' => 'Mohamed 3del',
        	'email' => 'Ma7969@gmail.com',
        	'password' => bcrypt('1234512345'),
        	'group' => 'admin',
        ]);
    }
}

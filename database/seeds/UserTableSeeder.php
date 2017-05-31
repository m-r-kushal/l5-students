<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	$user_name=['admin','kushal'];

    	for ($i=0; $i < 2; $i++) {
    		$user = new User;
    		$user->username = $user_name[$i];
    		$user->password = Hash::make('123456');
    		$user->save();
    	}

    }
}

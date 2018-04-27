<?php

use Illuminate\Database\Seeder;
use App\User;

class admin_account_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		if(User::count() == 0){
			$user = new User;
			$user->name = 'admin';
			$user->email = 'admin@core.com';
			$user->password = bcrypt('admin');
			$user->remember_token = str_random(10);
			$user->save();
		}
    }
}

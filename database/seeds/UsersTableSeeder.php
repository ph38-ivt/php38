<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // C1
        $data = [
        	[
	        	'username' => 'user1',
	        	'email' => 'abd@gmail.com',
	        	'password' => '122343',
	        	'address' => '20 le duan',
	        	'birthday' => '1990-10-10'

	        ],
	        [
	        	'username' => 'user2',
	        	'email' => 'abd1@gmail.com',
	        	'password' => 'fefdcdcd',
	        	'address' => '230 le duan',
	        	'birthday' => '1990-10-10'

	        ],
	        [
	        	'username' => 'user3',
	        	'email' => 'abd2@gmail.com',
	        	'password' => '1223vd43',
	        	'address' => '210 le duan',
	        	'birthday' => '1990-10-10'

	        ],
    	];
     //    User::insert($data);
    	//C2 
    	factory(App\User::class, 100)->create();
    }
}

<?php

use Illuminate\Database\Seeder;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = \App\User::create(['id' => 1, 'name' => 'Admin', 'email' => 'admin@admin.com', 'password' => '$2y$10$f.O9q3aBh6ADhnC98WrCmOO8dsmDzh1TJrTDitZA8sQM3FOQiMn5a','api_token'=> bin2hex(openssl_random_pseudo_bytes(30)), 'role_id' => 1, 'remember_token' => '',
        ]);
        
        App\Profile::create([
          'user_id'=>$user->id,
          'avatar'=>'uploads/avatars/2.png',
          'about'=>'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quidem, harum tempore maxime sit corporis consequuntur aspernatur facilis voluptatum nisi, blanditiis reprehenderit odio repudiandae soluta delectus perferendis! Voluptas adipisci eaque et.',
          'facebook'=>'facebook.com',
          'linkedin'=>'linkedin.com',
          
          ]);
    }
}

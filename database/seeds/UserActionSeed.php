<?php

use Illuminate\Database\Seeder;

class UserActionSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'user_id' => 1, 'action' => 'updated', 'action_model' => 'roles', 'action_id' => 2,],
            ['id' => 2, 'user_id' => 1, 'action' => 'updated', 'action_model' => 'roles', 'action_id' => 1,],
            ['id' => 3, 'user_id' => 1, 'action' => 'created', 'action_model' => 'roles', 'action_id' => 3,],
            ['id' => 4, 'user_id' => 1, 'action' => 'created', 'action_model' => 'categories', 'action_id' => 1,],
            ['id' => 5, 'user_id' => 1, 'action' => 'created', 'action_model' => 'tags', 'action_id' => 1,],
            ['id' => 6, 'user_id' => 1, 'action' => 'created', 'action_model' => 'places', 'action_id' => 1,],
            ['id' => 7, 'user_id' => 1, 'action' => 'created', 'action_model' => 'formations', 'action_id' => 1,],
            ['id' => 8, 'user_id' => 1, 'action' => 'deleted', 'action_model' => 'formations', 'action_id' => 1,],
            ['id' => 9, 'user_id' => 1, 'action' => 'deleted', 'action_model' => 'categories', 'action_id' => 1,],
            ['id' => 10, 'user_id' => 1, 'action' => 'deleted', 'action_model' => 'tags', 'action_id' => 1,],
            ['id' => 11, 'user_id' => 1, 'action' => 'deleted', 'action_model' => 'places', 'action_id' => 1,],

        ];

        foreach ($items as $item) {
            \App\UserAction::create($item);
        }
    }
}

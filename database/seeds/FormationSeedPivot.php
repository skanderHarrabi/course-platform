<?php

use Illuminate\Database\Seeder;

class FormationSeedPivot extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            1 => [
                'tag_id' => [1],
            ],

        ];

        foreach ($items as $id => $item) {
            $formation = \App\Formation::find($id);

            foreach ($item as $key => $ids) {
                $formation->{$key}()->sync($ids);
            }
        }
    }
}

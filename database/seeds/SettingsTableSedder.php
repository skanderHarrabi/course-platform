<?php

use Illuminate\Database\Seeder;

class SettingsTableSedder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Setting::create([
            'site_name'=>'Tech-care',
            'address'=>'tunis,menzah 6',
            'contact_number'=>'92203261',
            'contact_email'=>'Tech@care.com'
            ]);
    }
}

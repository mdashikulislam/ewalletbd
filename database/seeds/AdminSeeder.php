<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Model\Admin\Admin::create([
            'name'=>'md ashikul islam',
            'email'=>'ashik.nwu@gmail.com',
            'password'=>Hash::make('12345678')
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            // name
            // price
            // image
            // category
            // like
            // describe
            // content_details
            // reviews
            // date
        ]);
    }
}

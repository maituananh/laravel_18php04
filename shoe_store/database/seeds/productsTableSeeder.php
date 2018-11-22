<?php

use Illuminate\Database\Seeder;


class productsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert(
            [
                [
                    'name' => 'Nike01',
                    'price' => '12.56',
                    'image' => 'abc.png',
                    'category' => 'abc',
                    'like' => 10,
                    'describe' => 'abc',
                    'content_details' => 'ạksdkjasdj',
                    'reviews' => 'áhdakshdkhasjd',
                    'date' => '18-7-7',
                    'created_at' => date('Y-m-d H:i:s')
                ],
                [
                    'name' => 'Nike02',
                    'price' => '15.01',
                    'image' => '123.png',
                    'category' => 'ádjkasd',
                    'like' => 20,
                    'describe' => 'abc',
                    'content_details' => 'ạksdkjasdj',
                    'reviews' => 'áhdakshdkhasjd',
                    'date' => '18-7-7',
                    'created_at' => date('Y-m-d H:i:s')
                ],
                [
                    'name' => 'Nike03',
                    'price' => '19.1',
                    'image' => 'asadsad.png',
                    'category' => 'abc',
                    'like' => 10,
                    'describe' => 'abc',
                    'content_details' => 'ạksdkjasdj',
                    'reviews' => 'áhdakshdkhasjd',
                    'date' => '10-10-10',
                    'created_at' => date('Y-m-d H:i:s')
                ],
                // [
                //     'name' => 'Nike03',
                //     'price' => '19.1',
                //     'image' => 'asadsad.png',
                //     'category' => 'abc',
                //     'like' => 10,
                //     'describe' => 'abc',
                //     'content_details' => 'ạksdkjasdj',
                //     'reviews' => 'áhdakshdkhasjd',
                //     'date' => '10-10-10',
                //     'created_at' => date('Y-m-d H:i:s')
                // ],
            ]
        );
    }
}

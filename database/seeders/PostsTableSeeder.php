<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [
            ['title'=>'Tips Cepat Sukses ini teh', 'content'=>'xCoeg'],
            ['title'=>'Haruskah Menunda Sukses? yxg', 'content'=>'xCoeg'],
            ['title'=>'Membangun Visi Misi Kesuksesan bro', 'content'=>'xCoeg']
            ];

            DB::table('posts')->insert($posts);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Post;


class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //DB::table('posts')->insert([
            //ここにpostsテーブルに追加するものを書く
            Post::factory()->count(5)->create();
            /*
            'product_name' => 'ノート5冊セット',
            'price' => 600,
            'created_at' => '2023-06-01 00:00:00',
            'updated_at' => '2023-06-01 00:00:00',
            'vendor_code' => 1111*/
       // ]);
        //
    }
}

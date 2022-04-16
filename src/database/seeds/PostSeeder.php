<?php

namespace ShakibZaman\Post\database\seeds;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use ShakibZaman\Post\Model\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0;$i<=100;$i++)
        {
            Post::create([
                'title'=> Str::random(10),
                'description'=>Str::random(40),
            ]);
        }
    }
}

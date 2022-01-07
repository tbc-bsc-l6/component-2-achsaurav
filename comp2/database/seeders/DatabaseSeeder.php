<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        Post::factory(30)->create();
        User::factory(1)->create();

        // $book=Category::create([
        //     'name'=>'BOOK',
        //     'slug'=>'book'
        // ]);

        // $cd=Category::create([
        //     'name'=>'CD',
        //     'slug'=>'cd'
        // ]);

        // $game=Category::create([
        //     'name'=>'GAME',
        //     'slug'=>'game'
        // ]);
        
        // Post::create([
        //     'category_id'=>$book->id,
        //     'title'=>'laravel fundamentals',
        //     'firstname'=>'john',
        //     'surname'=>'biden',
        //     'price'=>100,
        //     'pages'=>35
        // ]);

        // Post::create([
        //     'category_id'=>$cd->id,
        //     'title'=>'fun play',
        //     'firstname'=>'matt',
        //     'surname'=>'crawl',
        //     'price'=>150,
        //     'pages'=>45
        // ]);

        // Post::create([
        //     'category_id'=>$game->id,
        //     'title'=>'Vice city',
        //     'firstname'=>'call',
        //     'surname'=>'grad',
        //     'price'=>200,
        //     'pages'=>70
        // ]);
         
    }
}

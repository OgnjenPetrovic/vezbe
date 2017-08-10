<?php

use Illuminate\Database\Seeder;

class PostsSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = new \App\Post();
        $post->title = "Najbolje Knjige";
        $post->published = true;
        $post->body = "sve o knjigama sto je moglo da bude";
        $post->save();

        $post = new \App\Post();
        $post->title = "Veliki Automobili";
        $post->published = true;
        $post->body = "koji su danas najveci automobili koji mogau da se nadju";
        $post->save();

        $post = new \App\Post();
        $post->title = "Programiranje danas";
        $post->published = false;
        $post->body = "koliko hoces da znas o programiranju";
        $post->save();
    }
}

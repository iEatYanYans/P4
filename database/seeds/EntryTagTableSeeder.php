<?php

use Illuminate\Database\Seeder;
use \App\Entry;
use \App\Tag;

class EntryTagTableSeeder extends Seeder
{

    public function run()
    {
        $entries= [
          '1'=>['well rested', 'great dream'],
          '2'=>['bad sleep', 'nightmare'],
          '3'=>['lucid dreams', 'insomnia']
        ];

        foreach($entries as $id =>$tags){
          $entry = Entry::where('id', 'like', $id)->first();

          foreach($tags as $tagName){
            $tag = Tag::where('name', 'like', $tagName)->first();
            $entry->tags()->save($tag);
          }
        }
    }
}

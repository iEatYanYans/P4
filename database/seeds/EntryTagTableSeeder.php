<?php

use Illuminate\Database\Seeder;
use \App\Entry;
use \App\Tag;

class EntryTagTableSeeder extends Seeder
{

    public function run()
    {
        $entries= [
          '1'=>['well rested', 'great dream', 'lucid dreams'],
          '2'=>['bad sleep', 'nightmare'],
          '3'=>['lucid dreams', 'insomnia'],
          '4'=>['well rested', 'great dream'],
          '5'=>['bad sleep', 'nightmare', 'insomnia'],
          '6'=>['lucid dreams', 'insomnia', 'well rested'],
          '7'=>['bad sleep', 'nightmare'],
          '8'=>['lucid dreams', 'insomnia'],
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

<?php

use Illuminate\Database\Seeder;
use \App\Tag;

class TagsTableSeeder extends Seeder
{

    public function run()
    {
        $data = ['well rested', 'bad sleep', 'nightmare', 'great dream', 'no dream', 'lucid dreams', 'insomnia', 'interrupted'];

        foreach ($data as $tagName){
          $tag = new Tag();
          $tag->name = $tagName;
          $tag->save();
        }
    }
}

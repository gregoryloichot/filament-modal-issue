<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Comment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Comment::create([
           'title' => 'Comment 1',
           'body' => 'Blabla',
            'article_id' => Article::all()->first()->id,
        ]);

        Comment::create([
            'title' => 'Comment 2',
            'body' => 'Blabla',
            'article_id' => Article::all()->first()->id,
        ]);

        Comment::create([
            'title' => 'Comment 3',
            'body' => 'Blabla',
            'article_id' => Article::all()[1]['id'],
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (range(1, 10) as $article) {
            DB::table('articles')->insert([
                'title' => "article $article",
                'slug' => "article-$article",
                'body' => "This is article $article"
            ]);
        }
    }
}

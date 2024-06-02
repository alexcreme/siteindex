<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run()
    {
        $categories = [
            'travel' => 'Turism',
            'business' => 'Economie',
            'architecture' => 'Architectura',
            'photography' => 'Fotografie',
            'music' => 'Muzica',
            'film' => 'Film',
            'lifestyle' => 'Lifestyle',
            'food' => 'Gastronomie',
            'sport' => 'Sport',
            'news' => 'Stiri',
        ];

        foreach ($categories as $category) {
            \App\Models\Category::create([
                'name' => $category,
            ]);
        }
    }
}

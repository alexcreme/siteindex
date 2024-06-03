<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run()
    {
        $categories = [
            'travel' => [
                'name' => 'Turism',
                'icon' => 'location-dot',
            ],
            'business' => [
                'name' => 'Economie',
                'icon' => 'briefcase', // example icon, update accordingly
            ],
            'architecture' => [
                'name' => 'Architectura',
                'icon' => 'building', // example icon, update accordingly
            ],
            'photography' => [
                'name' => 'Fotografie',
                'icon' => 'camera', // example icon, update accordingly
            ],
            'music' => [
                'name' => 'Muzica',
                'icon' => 'music-note', // example icon, update accordingly
            ],
            'film' => [
                'name' => 'Film',
                'icon' => 'film', // example icon, update accordingly
            ],
            'lifestyle' => [
                'name' => 'Lifestyle',
                'icon' => 'heart', // example icon, update accordingly
            ],
            'food' => [
                'name' => 'Gastronomie',
                'icon' => 'utensils', // example icon, update accordingly
            ],
            'sport' => [
                'name' => 'Sport',
                'icon' => 'football', // example icon, update accordingly
            ],
            'news' => [
                'name' => 'Stiri',
                'icon' => 'newspaper', // example icon, update accordingly
            ],
        ];


        foreach ($categories as $category) {
            \App\Models\Category::create([
                'name' => $category['name'],
                'icon' => $category['icon'] ?? null, // use null if icon is not set
            ]);
        }
    }
}

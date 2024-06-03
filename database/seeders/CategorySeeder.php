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
                'icon' => 'briefcase',
            ],
            'architecture' => [
                'name' => 'Architectura',
                'icon' => 'building',
            ],
            'photography' => [
                'name' => 'Fotografie',
                'icon' => 'camera',
            ],
            'music' => [
                'name' => 'Muzica',
                'icon' => 'music-note',
            ],
            'film' => [
                'name' => 'Film',
                'icon' => 'film',
            ],
            'lifestyle' => [
                'name' => 'Lifestyle',
                'icon' => 'heart',
            ],
            'food' => [
                'name' => 'Gastronomie',
                'icon' => 'utensils',
            ],
            'sport' => [
                'name' => 'Sport',
                'icon' => 'football',
            ],
            'news' => [
                'name' => 'Stiri',
                'icon' => 'newspaper',
            ],
            'finance' => [
                'name' => 'Financiar',
                'icon' => 'dollar-sign',
            ],
            'games' => [
                'name' => 'Jocuri',
                'icon' => 'gamepad',
            ],
            'science' => [
                'name' => 'Știință',
                'icon' => 'flask',
            ],
            'software' => [
                'name' => 'Software',
                'icon' => 'code',
            ],
            'web_design' => [
                'name' => 'Design Web',
                'icon' => 'palette',
            ],
            'health' => [
                'name' => 'Sănătate',
                'icon' => 'heart-pulse',
            ],
            'shopping' => [
                'name' => 'Cumpărături',
                'icon' => 'cart-shopping',
            ],
            'education' => [
                'name' => 'Educație',
                'icon' => 'graduation-cap',
            ],
            'technology' => [
                'name' => 'Tehnologie',
                'icon' => 'laptop',
            ],
            'real_estate' => [
                'name' => 'Imobiliare',
                'icon' => 'house',
            ],
            'fashion' => [
                'name' => 'Modă',
                'icon' => 'shirt',
            ],
            'automotive' => [
                'name' => 'Auto',
                'icon' => 'car',
            ],
            'events' => [
                'name' => 'Evenimente',
                'icon' => 'calendar',
            ],
            'other' => [
                'name' => 'Altele',
                'icon' => 'ellipsis',
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

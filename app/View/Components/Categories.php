<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Categories extends Component
{
    public function render()
    {
        return view('components.categories', [
            'categories' => \App\Models\Category::get()
        ]);
    }
}

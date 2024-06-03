<?php

namespace App\View\Components;

use App\Models\Category;
use Illuminate\View\Component;

class Site extends Component
{
    public $site;

    public $category;

    public function __construct($site, Category $category)
    {
        $this->site = $site;
        $this->category = $category;
    }

    public function render()
    {
        return view('components.site');
    }
}

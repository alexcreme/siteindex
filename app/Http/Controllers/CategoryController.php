<?php

namespace App\Http\Controllers;

use App\Models\Category;

class CategoryController extends Controller
{
    public function show(Category $category)
    {
        return view('category.show', [
            'category' => $category,
            'sites' => $category->sites()->get(),
        ]);
    }
}

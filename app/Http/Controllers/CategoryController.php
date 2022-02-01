<?php

namespace App\Http\Controllers;
use App\Category;

class Category extends Model
{
public function index(Category $category)
    {
    return view('categories.index')->with(['posts' => $category->getByCategory()]);
    }
    
}

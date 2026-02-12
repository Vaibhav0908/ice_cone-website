<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Categories;

class CategoriesController extends Controller
{
    public function index()
    {
        // Fetch all categories from the database
        $categories = Categories::all();

        // Pass data to a view
        return view('categories.index', compact('categories'));
    }
}
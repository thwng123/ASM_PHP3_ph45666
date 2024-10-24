<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
       
        $totalBooks = Book::count();

      
        $categories = Category::withCount('books')->get();

        $totalViews = Book::sum('views');


        return view('admin.index', compact('totalBooks', 'categories','totalViews'));
    }
}

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
        // Lấy tổng số sản phẩm
        $totalBooks = Book::count();

        // Lấy tổng số sản phẩm của mỗi danh mục
        $categories = Category::withCount('books')->get();
// dd($categories->toArray());
        // Lấy tổng lượt xem (giả sử bạn có trường views trong model Product)
        $totalViews = Book::sum('views');


        return view('admin.index', compact('totalBooks', 'categories','totalViews'));
    }
}

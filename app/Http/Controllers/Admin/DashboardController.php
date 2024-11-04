<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Category;
use App\Models\Order;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {

        $totalBooks = Book::count();


        $categories = Category::withCount('books')->get();

        $totalViews = Book::sum('views');

        $totalOrders = Order::count();

        $pendingOrders = Order::where('status', 'Đang chờ xử lý')->count();

        $processingOrders = Order::where('status', 'Đang xử lý')->count();

        $completedOrders = Order::where('status', 'Đã giao')->count(); 

        $cancelledOrders = Order::where('status', 'Từ chối')->count();


        return view('admin.index', compact('totalBooks', 'categories', 'totalViews', 'totalOrders', 'pendingOrders','processingOrders','completedOrders','cancelledOrders'));
    }
}

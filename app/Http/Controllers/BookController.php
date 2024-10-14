<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    public function index()
    {

        $featuredBooks = DB::table('books')->orderBy('id')->limit(4)->get();

        $offerBooks = DB::table('books')->orderByDesc('id')->limit(4)->get();

        $categories = DB::table('categories')->get();
        // dd($categories);

        return view('client.index', compact('featuredBooks', 'offerBooks', 'categories'));
    }


    public function detail($id)
    {
        $book = DB::table('books')->where('id', $id)->first();

        $featuredBooks = DB::table('books')->orderBy('id')->limit(4)->get();
        $categories = DB::table('categories')->get();

        // $books = DB::table('books')->where('category_id', $id)->get();

        $relatedBooks = DB::table('books')
            ->where('category_id', $book->category_id)
            ->where('id', '!=', $id)  // Loại trừ sản phẩm hiện tại
            ->get();


        // dd($books);


        return view('client.shop-single', compact('book', 'featuredBooks', 'categories', 'relatedBooks'));
    }

    public function popular_book($id)
    {

        $books = DB::table('books')->where('category_id', $id)->get();
        // dd($books);
        $categories = DB::table('categories')->get();

        $category = DB::table('categories')->where('id', $id)->first();


        // dd($categories);
        return view('client.popular-book', compact('categories', 'books', 'category'));
    }



    public function search(Request $request)
    {
        $categories = DB::table('categories')->get();
        $keyword = $request->input('keyword');

        $products = DB::table('books')->where('title', 'like', "%{$keyword}%")->paginate(3);
       
        return view('client.search', compact('categories', 'keyword', 'products'));


    }
}

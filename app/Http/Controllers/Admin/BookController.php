<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
// use Storage;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // const PATH_VIEW = 'books.';
    public function index()
    {
        $data = Book::latest('id')->paginate(9);
        return view('admin.books.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();

        return view('admin.books.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => ['required', 'max:255'],
            'content' => ['required', 'max:255'],
            'author' => ['required', 'max:255'],
            'thumbnail' => ['nullable', 'image', 'max:2048'],
            'price' => ['required', 'numeric', 'min:0'],
            'category_id' => Rule::in([1, 2, 3, 4,5])
        ]);



        if ($request->hasFile('thumbnail')) {
            $data['thumbnail'] = Storage::put('books', $request->file('thumbnail'));
        }

        Book::query()->create($data);

        return redirect()->route('admin.books.index')->with('message', 'Thao tác thành công');





    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        $categories = Category::all();

        return view('admin.books.edit', compact('categories', 'book'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        $data = $request->validate([
            'title' => ['required', 'max:255'],
            'content' => ['required', 'max:255'],
            'author' => ['required', 'max:255'],
            'thumbnail' => ['nullable', 'image', 'max:2048'],
            'price' => ['required', 'numeric', 'min:0'],
            'category_id' => Rule::in([1, 2, 3, 4,5])
        ]);



        if ($request->hasFile('thumbnail')) {
            $data['thumbnail'] = Storage::put('books', $request->file('thumbnail'));
        }

        $old_image = $book->thumbnail;
        $book->update($data);

        if (
            $request->hasFile('thumbnail')
            && !empty($old_image)
            && Storage::exists($old_image)
        ) {
            Storage::delete($old_image);
        }

        return back()->with('message', 'Thao tác thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        $book->delete();

        if (!empty($book->thumbnail) && Storage::exists($book->thumbnail)) {
            Storage::delete($book->thumbnail);
        }


        return redirect()->route('admin.books.index')->with('message', 'Thao tác thành công');


    }
}

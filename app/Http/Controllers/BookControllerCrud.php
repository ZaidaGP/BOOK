<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use Helper;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::paginate(5);
        $books = Book::all();
        
        return view('book.index',compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('book.store');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $book = new Book();
        $book->title = $request->input('title');
        $book->description = $request->input('description');
        $book->url = $request->input('url');
        $book->editorial =$request->input('editorial');
        $book->year_published = $request->input('year_published');
        //$book->available=1;
        if($request->input('available')== "on"){
            $book->available = true;
        }
        else{
        $book->available =false;
        }

        $book->save();
        
        return redirect()->route('book.index');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $book = Book::find($id);
        return view('book.show',compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book = Book::find($id);
        return view('book.edit',compact('book'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $book = Book::find($id);
        $book->title = $request->input('title');
        $book->description = $request->input('description');
        $book->url = $request->input('url');
        $book->editorial =$request->input('editorial');
        $book->year_published = $request->input('year_published');
        //$book->available=1;
        if($request->input('available')== "on"){
            $book->available = true;
        }
        else{
        $book->available =false;
        }

        $book->save();
        
        return redirect()->route('book.index');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Book::find($id)->delete();
        return redirect()->route('book.index');
    }
}

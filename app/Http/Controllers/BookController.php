<?php


namespace App\Http\Controllers;

use App\Http\Requests\ValidationRequest;
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
       //"all" method get all the books register in the database
        $books = Book::all();
        $response = Helper::ApiResponse(false,200,'',$books);
        return response()->json($response,200);
        
    }

    public function paginate()
    {
       //the paging method is responsible for paging
       // the books stored in the database, it will show only 4 books per page
        $books = Book::paginate(4);
        $response = Helper::ApiResponse(false,200,'',$books);
        return response()->json($response,200);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    //We make the request with the ValidationRequest class because que need to call the defined
    //validation rules.
    public function store(ValidationRequest $request)
    {
        $book = new Book();
        $book->title = $request->input('title');
        $book->description = $request->input('description');
        $book->url = $request->input('url');
        $book->editorial =$request->input('editorial');
        $book->year_published = $request->input('year_published');
        $book->available= $request->input('available');
        
        //we used the books_save variable to validate if the book was saved successfully
        $books_save = $book->save();
        
        //if the book was save successfully
        if($books_save){
            /**the Helper is used to send our message, first parameter "false" means there wasn't an error,
            the second parameter is a code used to inform that the request was successful, 
            the third parameter is the message that is going to be shown, and the last parameter means that there isn't data to return*/
            $response = Helper::ApiResponse(false,201,'Book save success',null);

            //the method return a json that have 2 parameter, the response variable that show the message
            return response()->json($response,200);
        }
        //if there was an error
        else{
            //
            $response = Helper::ApiResponse(true,400,'Book save failed',null);
            return response()->json($response,400);
        }
        //return redirect()->route('book.index');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //This method is used to show a specific book, depends of the id
    public function show($id)
    {
        //the find method search the specific book by it's id
        $book = Book::find($id);
        //return the book find
        $response = Helper::ApiResponse(false,200,'',$book);
        //return the json with the information
        return response()->json($response,200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    //We make the request with the ValidationRequest class because que need to call the defined
    //validation rules.
    public function update(ValidationRequest $request, $id)
    {
        $book = Book::find($id);
        $book->title = $request->input('title');
        $book->description = $request->input('description');
        $book->url = $request->input('url');
        $book->editorial =$request->input('editorial');
        $book->year_published = $request->input('year_published');
        $book->available = $request->input('available');
        
       
        //we used the books_updated variable to validate if the book was updated successfully
        $books_updated = $book->save();
         //if the book was update successfully
         if($books_updated){
             /**the Helper is used to send our message, first parameter "false" means there wasn't an error,
            the second parameter is a code used to inform that the request was successful, 
            the third parameter is the message that is going to be shown, and the last parameter means that there isn't data to return*/
            $response = Helper::ApiResponse(false,200,'Book update success',null);
            return response()->json($response,200);
        }
        //if there was an error
        else{
            //the 400 code means that the server  will not process the request due to something that is perceived to be a client error
            $response = Helper::ApiResponse(false,400,'Book update failed',null);
            return response()->json($response,400);
        }
        
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $book_delete = Book::find($id)->delete();
         //if the book was delete successfully
         if($book_delete){
            $response = Helper::ApiResponse(false,200,'Book delete success',null);
            return response()->json($response,200);
        }
        //if there was an error
        else{
            //the 400 code means that the server  will not process the request due to something that is perceived to be a client error
            $response = Helper::ApiResponse(true,400,'Book delete failed',null);
            return response()->json($response,400);
        }
    }
}

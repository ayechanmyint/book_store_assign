<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\Http\Requests\BookStoreRequest;
class BookController extends Controller
{
    //
    public function index(){

    	$books = Book::all();
    	
    	return view('book.index',compact('books'));
    }

    public function show(Book $detail){
    	return view('book.detail',compact('detail'));
    }

    public function create(){
    	return view('book.create');
    }

    public function store(BookStoreRequest $request){
        $request_data = $request->all();
        unset($request_data['_token']);
        $result = Book::create($request_data);

    	if($result){
    		return redirect()->route('book.index');
    	}
    }

    public function edit($id){
    	$book  = \DB::table('books')->where('id', '=', $id)->first();
    	return view('book.edit',compact('book'));
    }

    public function update(BookStoreRequest $request,$id){
        $request_book = $request->all();
        unset($request_book['_token']);
        $result = Book::update($request_book);
        if ($result) {
          
            return redirect()->route('book.index');
        }
    }
}

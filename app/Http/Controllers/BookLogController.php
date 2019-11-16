<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BookLog;

class BookLogController extends Controller
{
    //
    public function createLog(BookLog $booklog){
    	
    	return view('book_log.create',compact('booklog'));
    }

    public function storeLog(Request $request){
        $request_data = $request->all();
        unset($request_data['_token']);
        $result = BookLog::create($request_data);

    	if($result){
    		return redirect()->back();
    	}    	
    }
}

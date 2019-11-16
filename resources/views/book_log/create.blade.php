@extends('layout')
@section('content')

    <h1>Create new product review</h1>
    @if($errors->any())
        @foreach($errors->all() as $error)
            <p>{{$error}}</p>
        @endforeach
    @endif
    
    <!-- <form action="/product_review/store/" method="post"> -->
        <form action="/booklog/store" method="post">
        	@csrf

	        <label for="product_name">Customer Name  :</label>
	        <input type="text" id="customer_name" name="customer_name">
	        <br/>

	        <input type="hidden" name="book_id" value={{$booklog->book_id}}>
	        <button type="submit">Save</button>
    	</form>

@endsection
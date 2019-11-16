@extends('layout')
@section('content')

    <h1>Edit Books</h1>
    @if($errors->any())
        @foreach($errors->all() as $error)
            <p>{{$error}}</p>
        @endforeach
    @endif
    
    <!-- <form action="/product_review/store/" method="post"> -->
        <form action="/book/{{$book->id}}/update" method="post">
        	@csrf

	        <label for="product_name">Book Name  :</label>
	        <input type="text" id="name" name="name" value="{{$book->name}}">
	        <br/>

	        <label for="exampleInputEmail1">Book Price  :</label>
	        <input type="text" id="price" name="price" value="{{$book->price}}">
	        <br/>
	        <input type="hidden" name="is_active" value=0>
	        <button type="submit">Update</button>
    	</form>

@endsection
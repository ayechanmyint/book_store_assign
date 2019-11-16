@extends('layout')
@section('content')

    <h1>Create new product review</h1>
    @if($errors->any())
        @foreach($errors->all() as $error)
            <p>{{$error}}</p>
        @endforeach
    @endif
    
    <!-- <form action="/product_review/store/" method="post"> -->
        <form action="{{route('book.store')}}" method="post">
        	@csrf

	        <label for="product_name">Product Name  :</label>
	        <input type="text" id="name" name="name">
	        <br/>

	        <label for="exampleInputEmail1">Review Detail  :</label>
	        <input type="text" id="price" name="price">
	        <br/>
	        <input type="hidden" name="is_active" value=0>
	        <button type="submit">Save</button>
    	</form>

@endsection
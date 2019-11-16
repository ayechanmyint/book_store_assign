@extends('layout')
@section('content')
	
    <div class="container-fluid px-4 py-4">
            <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="d-flex py-2">
                            <h2> Book List </h2>           
                        </div>
                     <div class="card">
                     	<div class="card-header"><h5>{{$detail->name}}</h5></div>
                        <div class="card-body">
                        	<p>Price - {{ $detail->price }}</p>
                            @foreach($detail->bookLog as $dtl)
                        	   <p> {{$dtl->customer_name}} {{$dtl->created_at}} </p>
                            @endforeach
                    	</div>
                    	<div class="card-footer"></div>
                </div>

            </div>
        </div>
     <div class="row">
        <div class="col-lg-8 offset-lg-2">
            <div class="d-flex py-4">    
                <a href="/booklog/{{$detail->id}}/create" class="btn btn-info" role="button">Add New Log</a>
                
            </div>
        </div>
     </div>   

            
    </div>        
		
@endsection
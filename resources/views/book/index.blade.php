@extends('layout')
@section('content')
    
  

    <div class="container-fluid px-4 py-4">
            <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="d-flex py-2">
                            <h2> Book List </h2>           
                        </div>
                     <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                             <table class="table">
                                <thead>
                                    <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Book Name</th>
                                    <th scope="col">Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($books as $x=>$book)
                                    <tr>
                                       <td>{{++$x}}</td>
                                       <td>{{$book->name}}</td>
                                       <td><a href="/book/{{$book->id}}/edit">Edit</a></td>
                                       <td><a href="/book/{{$book->id}}/show">Book Detail</a></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>

                </div>

            </div>
        </div>
     <div class="row">
        <div class="col-lg-8 offset-lg-2">
            <div class="d-flex py-4">    
                <a href="/book/create" class="btn btn-info" role="button">Add New</a>
            </div>
        </div>
     </div>   

            
    </div>        
        
@endsection



 

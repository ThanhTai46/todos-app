@extends('layouts.app')
@section('content')
   <div class="row justify-content-center">
       <div class="col-md-8 my-4">
        <div class="card card-default">
            <div class="card-header">Create New Todos</div>
            <div class="card-body">
                <form action="/store-todos" method="post">
                    @csrf
                  
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp" placeholder="Name input">
                      
                    </div>
                    <div class="form-group">
                        <textarea name="description" id="description" cols="5" rows="5" class="form-control" placeholder="Description in here!"></textarea>
                    </div>
                   
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
       </div>
   </div>
@endsection
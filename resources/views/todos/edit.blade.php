@extends('todos.layouts.app')
@section('title', 'update | Todos')
@section('content')


    <div class="row justify-content-center">
        <div class="col-lg-6 mt-5">
           <div class="card">
               <div class="card-header">
                   <h2 class="card-title">
                      Update post
                   </h2>
               </div>
               <div class="card-body">
               <form action="/update/{{$todo->id}}" method="POST">
                       @csrf
                       
                       @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif


                    
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
 
                   <div class="form-group mt-3 py-2">
                       <label for="" class="fw-bold">name</label>
                       <input type="text" name="name" class="form-control" value="{{$todo->name}}">
                   </div>

                   <div class="form-group mt-3 py-2">
                       <label for="" class="fw-bold">description</label>
                       <textarea name="descriptions" class="form-control">{{$todo->descriptions}}</textarea>
                      
                   </div>

                  

                   <div class="form-group my-4">
                      <input type="submit" name="submit" class="form-control btn btn-danger">
                   </div>

                   </form>
               </div>
           </div>
        </div>
    </div>
    @endsection

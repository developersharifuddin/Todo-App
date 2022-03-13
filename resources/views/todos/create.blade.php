@extends('todos.layouts.app')
@section('title', 'Create Post| Todos')
@section('content')


    <div class="row justify-content-center">
        <div class="col-lg-6 mt-5">
           <div class="card">
               <div class="card-header">
                   <h2 class="card-title">
                       Create a post
                   </h2>
               </div>
               <div class="card-body">
                   
                   <form action="/store" method="POST">
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

                   <div class="form-group mt-3">
                       <label for="">name</label>
                       <input type="text" name="name" class="form-control">
                   </div>

                   <div class="form-group mt-3">
                       <label for="">descriptions</label>
                       <textarea name="descriptions" class="form-control"></textarea>
                      
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

@extends('todos.layouts.app')
@section('title', 'Contact-us | Todos')
@section('content')

    <div class="row justify-content-center">
        <div class="col-lg-6 mt-5">
            <div class="card">
            <div class="card-body">
                   
                   <form action="/contactStore" method="POST">
                       @csrf


                   <div class="form-group mt-3">
                       <label for="">username</label>
                            @error('username')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                       <input type="text" name="username" class="form-control @error('username') is-invalid @enderror">
                   </div>



                   <div class="form-group mt-3">
                       <label for="">email</label>
                           @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                       <input type="text" name="email" class="form-control @error('email') is-invalid @enderror">
                   </div>



                   <div class="form-group mt-3">
                       <label for="">title</label>
                            @error('title')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                       <input type="text" name="title" class="form-control @error('title') is-invalid @enderror">
                        
                       
                    </div>


                   <div class="form-group mt-3">
                       <label for="">message</label>
                        @error('message')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                       <textarea name="message" class="form-control @error('message') is-invalid @enderror"></textarea>
                      
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
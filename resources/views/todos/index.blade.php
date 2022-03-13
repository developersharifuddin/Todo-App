@extends('todos.layouts.app')
@section('title', 'Home | Todos')
@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-6 mt-5">
            
        <ul class="list-group">
                    @foreach($todos as $todo)
                       <li class="list-group-item">{{$todo->id}}. {{$todo->name}}
                       <a href="/view/{{$todo->id}}" class="btn btn-info btn-sm float-end">View</a>
                          
                          @if(!$todo->compleated)
                          <a href="/compleated/{{$todo->id}}" class="btn btn-danger btn-sm float-end mx-2">Compleated</a>
                          @endif
                          
                       
                    </li>
  
                        @endforeach
                        
                        </ul>
        </div>
    </div>
    @endsection

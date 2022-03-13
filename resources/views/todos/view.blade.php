@extends('todos.layouts.app')
@section('title', 'Viewe | Blog')

@section('content')

<div class="row justify-content-center">
        <div class="col-lg-6 mt-5">
             
                  <div class="card">
                  
                      <div class="card-header">
                          <h2 class="card-title"> {{$todos->name}} </h2>
                      </div>

                      <div class="card-body">
                       {{$todos->descriptions}}  
                     
                      </div>
                      <div class="card-footer">
                       
                       <a href="/edit/{{$todos->id}}" class="btn btn-info btn-sm" onclick="edit()"> edit</a> ||
                       <a href="/delete/{{$todos->id}}" class="btn btn-danger btn-sm" onclick="demo();">delete</a>

                      </div>

                                                                   
                        <script type="text/javascript">
                        function demo() {
                        alert ("Are You Sure You Want To Delete Data ?  Press Ok TO Deleted!");
                        document.write ("Your Data Has Been Deleted!");
                        alert (" Press Ok TO Deleted!");
                        document.write ("Your Data Has Been Deleted!");
                        }
                        </script>


                    <!-- <p id="output"></p>
                     

                    <script>
                    function edit() {//function definition
                    var age;
                    if (confirm("Are you 24 years old?"))  //if press ok then value is true
                    {
                    age="I am 24 years old";
                    }
                    else    //if press Cancel then value is false
                    {
                    age="I am 1 year old"
                    }
                    //document.getElementById("output").innerHTML = age;
                    }
                    edit();

                    </script> -->
                    









                        
                  </div>
                    
        </div>


            


    </div>


@endsection
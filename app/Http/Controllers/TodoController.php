<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
   public function index()
   {
       $todos = Todo::all();
       return view('todos.index', compact('todos'));
   }

  

   public function create()
   {
       return view('todos.create');
   }

 

   public function store(Request $request)
   {
       $this->validate($request, [
           'name'=>'required| min:6|max:40',
           'descriptions'=> 'required'

       ]);

       $todo = new Todo();
       $todo->name = $request->name;
       $todo->descriptions = $request->descriptions;
       $todo->compleated = false;

       $todo->save();
       return redirect('/');

 
   }

 



   public function view($id)
   {
       $todos = Todo::find($id);
       return view('todos.view', compact('todos'));
   }



   public function edit($id)
   {
       $todo = Todo::find($id);
       return view('todos.edit', compact('todo'));
   }

  
    //update data in edit pages By Update Modal No other Page
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|min:5|max:255',
            'descriptions' => 'required',
        ]);

        $todos = Todo::find($id);
        $todos->name = $request->name;
        $todos->descriptions = $request->descriptions;
        $todos->compleated =false;
 
        $todos->save();
        return redirect('/')->with('status', 'data updated!');
    }


 


   public function delete($id)
   {
    $todos = Todo::find($id);
    $todos->delete();
    return redirect('/');

   }



   
  
  // compleated button
  public function compleated($id)
  {
   $todos= Todo::find($id); 
   $todos->compleated=true;
   $todos->save();
   return redirect('/');
  }


}

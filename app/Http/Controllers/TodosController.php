<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class TodosController extends Controller
{
    public function liste(){
        return view("home", ["todos" => \App\Models\Todos::all()]);
    }
    public function saveTodo(Request $request){
        $texte = $request->input('texte');
    
        if($texte){
          $todo = new \App\Models\Todos();
          $todo->texte = $texte;
          $todo->termine = 0;
          $todo->save();
        }
    
        return redirect("/");
    }

    public function markAsDone($id){
        $todo  = \App\Models\Todos::find($id);
        if($todo){
            $todo->termine = 1;
            $todo->save();
        }
        return redirect("/");
    }
}

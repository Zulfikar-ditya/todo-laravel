<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\models\todos;

class todoCotrol extends Controller
{
    function index() {
        return 'Here Is From Contorller';
    }

    function addTodoView() {
        return view('add');
    }

    function addTodoFucn(Request $request) {
        $NewData = new todos;
        $NewData['name'] = $request->input('name');
        $NewData['user_id'] = Auth::id();
        $NewData->save();
        if ($request->input('add')) {
            return redirect('my-todo');
        } else{
            return redirect('add-todo');
        }
    }

    function MyTodo() {
        $MyTodo = DB::table('todos')->where('user_id', '=', Auth::id())->get();
        return view('my-todo', ['data' => $MyTodo]);
    }

    function deleteTodo($id) {
        $id= (int)$id;
        $getTodo = todos::findOrFail($id);
        if ($getTodo['user_id'] != Auth::id()) {
            return abort('404');
        }
        else {
            $getTodo->delete();
            return redirect('my-todo');
        }
    }

}

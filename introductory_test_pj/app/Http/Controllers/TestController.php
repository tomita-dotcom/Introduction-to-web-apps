<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use App\Http\Requests\TodoRequest;

class TestController extends Controller
{
    public function index()
    {
        $todos = Todo::all();
        return view('index', ['todos' => $todos]);
    }

    public function store(TodoRequest $request)
    {
        $new_todo = new Todo;
        $form = $request->all();
        unset($form['_token']);
        Todo::create($form);
        return redirect('/');
    }

    public function update(TodoRequest $request)
    {
        $this->validate($request, Todo::$rules);
        $form = $request->all();
        dd($form);
        Todo::where('id', $request->content)->update($form);
        unset($form['_token']);
        Todo::save($form);
        return redirect('/');
    }

    public function delete(Request $request)
    {
        Todo::find($request->id)->delete();
        dd($request);
        return redirect('/');
    }
}

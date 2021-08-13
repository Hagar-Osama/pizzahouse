<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;

class PizzaController extends Controller
{
    public function index()
    {
        $pizzas = Pizza::all();
        return view('pizzas.index', ['pizzas' => $pizzas]);
    }
    public function show($id)
    {
        $pizza = Pizza::findorfail($id);
        return view('pizzas.show', ['pizza'=>$pizza]);
    }
    public function create()
    {
        return view('pizzas.create');
    }
    public function store(request $request)
    {
        //$pizza = new pizza();
        //$pizza->name = request('name');
       //$pizza->type = request('type');
      //$pizza->base = request('base');
     //$pizza->toppings = request('toppings');
    // $pizza->save();
       Pizza::create($request->all());
     //  return request('toppings');
        return redirect('/')->with('msg', 'Thanks For ordering');
    }
    public function destroy($id)
    {
        $pizza = Pizza::findorfail($id);
        $pizza->delete();
        return redirect('/pizzas');

    }
}

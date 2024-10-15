<?php

namespace App\Http\Controllers;

use App\Models\Pizza;
use Illuminate\Http\Request;
use View;

class PizzaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pizza = Pizza::all();
        return view("pizza.index")->with("pizzas", $pizza);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("pizza.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Pizza::create($request->all());
        return redirect('/pizza');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pizza $pizza)
    {
        return view("pizza.show")->with("pizza", $pizza);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pizza $pizza)
    {
        return View("pizza.edit")->with("pizza", $pizza);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pizza $pizza)
    {
        $pizza->update($request->all());
        return redirect('/pizza');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pizza $pizza)
    {
        $pizza->delete();
        return redirect('/pizza');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;

class PizzariaAPIController extends Controller
{
    public function index()
    {
        return Pizza::all();
    }
    public function show(Pizza $pizza)
    {
        return $pizza;
    }
    public function store(Request $request)
    {
        $pizza = Pizza::create( $request->all() );
        return $pizza;
    }
}

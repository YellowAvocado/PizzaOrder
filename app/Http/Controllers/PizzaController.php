<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Pizza;
use App\Models\Post;
use App\Models\Product;
use Illuminate\Http\Request;

class PizzaController extends Controller
{
    public function index()
    {
        return view('pizza.index', [
            'pizzas' => Pizza::all()
        ]);
    }

    public function show($id)
    {
        return view ('pizza.show', [
            'pizza' => Pizza::find($id)
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    //
    public function index()
    {
        return "Bienvenido a productos";       
    }

    public function viewDetails($productName)
    {
        return "Nombre del producto: ".$productName;
    }
}

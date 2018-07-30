<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FormularioRequest;
class PagesController extends Controller
{
    public function home()
    {
    	return view("home");
    }

    public function showForm()
    {   
        return view("registro");
    }
    public function store(FormularioRequest $request)
    {
    	return $request->all();
    }
    // public function login()
    // {
    // 	return view("login");
    // }
}

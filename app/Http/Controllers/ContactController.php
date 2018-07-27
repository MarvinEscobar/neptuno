<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
	
    public function showForm()
    {
    	//return view('regitro');//proyecto
    	return view('contacto');
    }
     public function store(ContactRequest $request)
    {
    	return $request->all();
    	return view('login');
    }
}

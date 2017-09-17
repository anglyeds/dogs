<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dog;

class DogController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
    	$dogs = Dog::find($id);
        return view('dogs.profile')
            ->with('dog', $dogs);
    }


}

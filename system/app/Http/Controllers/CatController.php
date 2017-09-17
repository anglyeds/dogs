<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cat;


class CatController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
    	$cats = Cat::find($id);
        return view('cats.profile')
            ->with('cat', $cats);
    }

}

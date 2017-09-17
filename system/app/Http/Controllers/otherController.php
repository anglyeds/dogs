<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Other;

class OtherController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
    	$others = Other::find($id);
        return view('others.profile')
            ->with('other', $others);
    }
}

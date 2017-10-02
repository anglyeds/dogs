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

        $data = (object)[
            'name' => $cats->name,
            'description' => $cats->description,
            'image' =>  $cats->image,
            'location' => $cats->location,
            'type' => $cats->type,
            'breed' => $cats->breed,
            'size' => $cats->size,
            'age' => $cats->age,
            'coat_colour' => $cats->coat_colour,
            'skills'=> $cats->skills,
            'shooting_exp' => $cats->shooting_exp,
            'video_link' => $cats->video_link,
            'multiple_images' => $cats->multiple_images
        ];

        return view('cats.profile')
            ->with('cat', $data);
    }

}

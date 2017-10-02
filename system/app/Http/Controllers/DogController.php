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

    	$data = (object)[
            'name' => $dogs->name,
            'description' => $dogs->description,
            'image' =>  $dogs->image,
            'location' => $dogs->location,
            'type' => $dogs->type,
            'breed' => $dogs->breed,
            'size' => $dogs->size,
            'age' => $dogs->age,
            'coat_colour' => $dogs->coat_colour,
            'skills'=> $dogs->skills,
            'shooting_exp' => $dogs->shooting_exp,
            'video_link' => $dogs->video_link,
            'multiple_images' => $dogs->multiple_images
        ];


        return view('dogs.profile')
            ->with('dog', $data);
    }


}

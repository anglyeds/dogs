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

        $data = (object)[
            'name' => $others->name,
            'description' => $others->description,
            'image' =>  $others->image,
            'location' => $others->location,
            'type' => $others->type,
            'breed' => $others->breed,
            'size' => $others->size,
            'age' => $others->age,
            'coat_colour' => $others->coat_colour,
            'skills'=> $others->skills,
            'shooting_exp' => $others->shooting_exp,
            'video_link' => $others->video_link,
            'multiple_images' => $others->multiple_images
        ];
        
        return view('others.profile')
            ->with('other', $data);
    }
}

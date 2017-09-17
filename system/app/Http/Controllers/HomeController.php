<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Post;
use App\Banner;
use App\Dog;
use App\Cat;
use App\Other;
use Validator;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banners = Banner::all();
        return view('home')->with('banner', $banners);
    }

    public function dogs()
    {
        $dogs = Dog::all();
        return view('dogs.index')->with('dog', $dogs);
    }

    public function cats()
    {
        $cats = Cat::all();
        return view('cats.index')->with('cat', $cats);
    }

    public function others()
    {
        $others = Other::all();
        return view('others.index')->with('other', $others);
    }

    public function contact()
    {
        return view('contacts.index');
    }

    public function becomeModels() {
        return view('become-model.index');
    }

    public function about()
    {
        $posts = Post::all();
        return view('abouts.index')->with('post', $posts);
    }

    public function submitContactForm(Request $request) {

        $rules =  [
            'name' => 'required',
            'email' => 'required|email',
            'description'=> 'required'
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        $name = $request->input('name');
        $email = $request->input('email');
        $description = $request->input('description');


        //here you can store to db or send mail to website owner 
        //Mail TO??
        //store db?? donknow haha
        // this will log to laravel.log
        \Log::info([]);

        return redirect()->back()->with("status", "success");
    }
}

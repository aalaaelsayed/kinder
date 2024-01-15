<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Testimonial;

use App\Traits\Common;

class KinderController extends Controller
{
    private $columns = ['clientName', 'profession', 'published','content'];

    //
    public function index()
    {
        return view('index');
    }
    public function team()
    {
        return view('team');
    }
    // public function error ()
    // {
    //     return view('404');
    // }

    public function action()
    {
        return view('callAction');
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }
    public function classes()
    {
        return view('classes');
    }
    public function appointment()
    {
        return view('appointment');
    }
   
    public function testimonial()
    {
        $testimonials =Testimonial::get();

        return view('testimonial',compact("testimonials"));
    }
    public function facilities()
    {
        return view('facilities');
    }
}

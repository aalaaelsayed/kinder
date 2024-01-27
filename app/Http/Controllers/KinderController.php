<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Testimonial;
use App\models\Classe;
use App\models\Teacher;

use App\Traits\Common;

class KinderController extends Controller
{
    private $columns = ['clientName', 'profession', 'published','content'];

    //
    public function index()
    {
       $teachers =Teacher::where('active', 1)->take(3)->get();
        $classes =Classe::where('active', 1)->take(5)->get();
        $testimonials =Testimonial::where('published', 1)->take(5)->get();
        return view('index',compact("teachers","classes","testimonials"));
    }


 


    public function team()
    {
     $teachers =Teacher::get();
        $classes =Classe::get();

        return view('team',compact("teachers","classes"));
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
     $testimonials =Testimonial::get();
       $classes =Classe::get();
       $teachers = Teacher::get();

        return view('classes',compact("testimonials","classes","teachers"));
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

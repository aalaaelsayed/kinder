<?php
namespace App\http\View\Composers;
use Illuminate\View\View;
use App\models\Testimonial;

class NavbarComposer{

    public function compose(View $view)
    {
        $read_at= Testimonial::where('read_at',false)->count();
        $view->with('read_at',$read_at);
     
    }

}
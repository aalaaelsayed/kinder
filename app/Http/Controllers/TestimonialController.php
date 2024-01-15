<?php

namespace App\Http\Controllers;
use App\models\Testimonial;

use Illuminate\Http\Request;
use App\Traits\Common;

class TestimonialController extends Controller
{
    use Common;
  // private $columns = ['clientName', 'profession', 'published','content'];

    /**
     * Display a listing of the resource.
     */
 
    public function index()
    {
        //
        $testimonials =Testimonial::get();
        return view ('admin.testimoninals',compact("testimonials"));
   
      
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

        return view ('admin.InsertTestimonials');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $messages = $this->messages();

$data =$request->validate([
'clientName'=>'required|string|max:50',
'profession'=>'required|string',
'image' => 'required|mimes:png,jpg,jpeg|max:2048',
'content'=>'required|string',
] ,$messages);
$data['published'] =isset($request->published);

$fileName = $this->uploadFile($request->image, 'assets/images');    
        $data['image'] = $fileName;
Testimonial::create($data);
return redirect ('admin/testimonials');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $testimonials = Testimonial::findOrFail($id);
        return view ('admin.viewTestimonials',compact("testimonials"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $testimonials = Testimonial::findOrFail($id);
        return view ('admin.updateTestimonial',compact("testimonials"));


    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $data = Testimonial::find($id);
        $messages = $this->messages();
        $data = $request->validate([
            'clientName'=>'required|string|max:50',
            'profession'=>'required|string',
            'content'=>'required',
        ], $messages);
    if ($request->hasFile('image')) {
        // Upload  image
        $fileName = $this->uploadFile($request->image, 'assets/images');    
        $data['image'] = $fileName;
    }
        $data['published'] = isset($request->published);


        Testimonial::where('id',$id)->update($data);
        return redirect('admin/testimonials');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Testimonial::where ('id',$id) ->delete();
return redirect('admin/testimonials');
    }

    public function trashed()
    {
        //
      $testimonials = Testimonial::onlyTrashed()->get();
return view ('admin.trashedTestimonials',compact("testimonials"));
    }
    
    public function forceDelete(string $id)
    {
        //
        Testimonial::where ('id',$id) ->forceDelete();
        return redirect('admin/testimonials');
    }
    public function restore(string $id)
    {
        //
        Testimonial::where ('id',$id) ->restore();
        return redirect('admin/testimonials');
    }
    public function messages(){
        return [
            'clientName.required'=>'العنوان  المطلوب',
            'profession.string'=>'Should be string',
            'content.required'=> 'should be text',
            'image.required'=> 'please insrt image',
            'image.mimes'=> 'Incorrect image type',
            'image.max'=> 'Max file size exceeded',

            ];
    }

}

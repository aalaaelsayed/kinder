<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Classe;
use App\models\Teacher;
use App\Traits\Common;

class ClassesController extends Controller
{
    use Common;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $classes =Classe::get();
        return view ('admin.Classes',compact("classes"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $teachers =Teacher::get();
        return view ('admin.addClasses', compact('teachers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $messages = $this->messages();

        $data =$request->validate([
        'className'=>'required|string|max:50',
        'time'=>'required',
        'capacity'=>'required',
        'age'=>'required',
        'price'=>'required',
        'teacherId'=>'required',
              ] ,$messages);
        $data['active'] =isset($request->active);
        $fileName = $this->uploadFile($request->class_image, 'assets/images');    
        $data['class_image'] = $fileName;
                Classe::create($data);
                return redirect ('admin/classeslist');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $classes = Classe::findOrFail($id);
        return view ('admin.showClasses',compact("classes"));
        

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $classes = Classe::findOrFail($id);
        $teachers=Teacher::get();

        return view ('admin.updateClasses',compact("classes","teachers"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $data = Classe::find($id);
        $messages = $this->messages();
        $data = $request->validate([
            'className'=>'required|string|max:50',
            'capacity'=>'required|string',
            'time'=>'required',
            'age'=>'required',
            'price'=>'required',
            'teacherId'=>'required',

        ], $messages);
    if ($request->hasFile('class_image')) {
        // Upload  image
        $fileName = $this->uploadFile($request->class_image, 'assets/images');    
        $data['class_image'] = $fileName;
    }
        $data['active'] = isset($request->active);
        Classe::where('id',$id)->update($data);
        return redirect('admin/classeslist');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Classe::where ('id',$id) ->delete();
return redirect('admin/classeslist');
    }

    public function trashed()
    {
        //
      $classes = Classe::onlyTrashed()->get();
return view ('admin.trashedclasses',compact("classes"));
    }
    
    public function forceDelete(string $id)
    {
        //
        Classe::where ('id',$id) ->forceDelete();
        return redirect('admin/classeslist');
    }
    public function restore(string $id)
    {
        //
        Classe::where ('id',$id) ->restore();
        return redirect('admin/classeslist');
    }
    public function messages(){
        return [
            'className.required'=>'العنوان  المطلوب',
            'capacity.string'=>'Should be string',
            'time.required'=> 'should be text',
            'age.string'=>'Should be string',
            'price.string'=>'Should be string',
            'teacherId.string'=>'Should be string',
            'class_image.required'=> 'please insrt image',
            'class_image.mimes'=> 'Incorrect image type',
            'class_image.max'=> 'Max file size exceeded',
            ];
    }
}

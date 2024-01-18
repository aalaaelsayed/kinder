<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Teacher;
use App\Traits\Common;

class TeacherController extends Controller
{
    use Common;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $teachers =Teacher::get();
        return view ('admin.teacherlist',compact("teachers"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view ('admin.teacherlist');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $messages = $this->messages();

        $data =$request->validate([
        'teacherName'=>'required|string|max:50',
        'position'=>'required',
        'facebook'=>'required',
        'twiter'=>'required',
        'instagram'=>'required',
              ] ,$messages);
        $data['active'] =isset($request->active);
        $fileName = $this->uploadFile($request->image, 'assets/images');    
        $data['image'] = $fileName;
                Teacher::create($data);
                return redirect ('teacherlist');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $teachers = Teacher::findOrFail($id);
        return view ('admin.showteacher',compact("teachers"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $teachers = Teacher::findOrFail($id);
        return view ('admin.updateTeacher',compact("teachers"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $data = Teacher::find($id);
        $messages = $this->messages();
        $data = $request->validate([
            'teacherName'=>'required|string|max:50',
            'position'=>'required|string',
            'facebook'=>'required',
            'twiter'=>'required',
            'instagram'=>'required',
        ], $messages);
    if ($request->hasFile('image')) {
        // Upload  image
        $fileName = $this->uploadFile($request->image, 'assets/images');    
        $data['image'] = $fileName;
    }
        $data['active'] = isset($request->active);
        Teacher::where('id',$id)->update($data);
        return redirect('admin/teacherlist');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Teacher::where ('id',$id) ->delete();
        return redirect('admin/teacherlist');
    }
    public function trashed()
    {
        //
      $teachers = Teacher::onlyTrashed()->get();
return view ('admin.trashedteacher',compact("teachers"));
    }
    
    public function forceDelete(string $id)
    {
        //
        Teacher::where ('id',$id) ->forceDelete();
        return redirect('admin/teacherlist');
    }
    public function restore(string $id)
    {
        //
        Teacher::where ('id',$id) ->restore();
        return redirect('admin/teacherlist');
    }
    public function messages(){
        return [
            'teacherName.required'=>'Should be string',
            'position.string'=>'Should be string',
            'facebook.required'=> 'should be text',
            'twiter.string'=>'Should be string',
            'instagram.string'=>'Should be string',
            'image.required'=> 'please insrt image',
            'image.mimes'=> 'Incorrect image type',
            'image.max'=> 'Max file size exceeded',
            ];
    }
}

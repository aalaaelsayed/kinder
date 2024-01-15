<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\Common;
use App\models\Appointment;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $appointments =Appointment::get();
        return view ('admin.Appointmentlist',compact("appointments"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view ('admin.Appointmentlist');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $messages = $this->messages();

        $data =$request->validate([
        'guardianName'=>'required|string|max:50',
        'guradianEmail'=>'required|string',
        'childName'=>'required|string',
        'childAge'=>'required|string',
        'message'=>'required|string',
        ] ,$messages);
                Appointment::create($data);
        return redirect ('appointmentindexxx');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $appointments = Appointment::findOrFail($id);
        return view ('admin.viewTestimonials',compact("appointments"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function messages(){
        return [
            'guardianName.required'=>'العنوان  المطلوب',
            'guradianEmail.string'=>'Should be string',
            'childName.required'=> 'should be text',
            'childAge.string'=>'Should be string',
            'message.string'=>'Should be string',
          
           

            ];
    }
}

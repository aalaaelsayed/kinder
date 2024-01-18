<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Contact;
use App\Mail\DemoMailContact;
use Mail;
use App\Http\controllers\KinderController;




class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
    public function sandemail(Request $request)
    {
     $data = $request->validate([
                'name'=>'required|string|max:50',
                'email'=> 'required|string',
                'subject' => 'required|string',
                'message' => 'required',
   ]);
   
            Contact::create($data);
            Mail::to( 'alaa@email.com')->send( new DemoMailContact($data));
         // return "mail sent!";
          return redirect('contact');

            
    }
    public function messages(){
        return [
            'name.required'=>'العنوان  المطلوب',
            'email.string'=>'Should be string',
            'subject.required'=> 'should be text',
            'message.string'=>'Should be string',
            ];
    }
}

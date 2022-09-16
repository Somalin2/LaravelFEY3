<?php

namespace App\Http\Controllers;
use File;
use App\Models\Phone;
use App\Models\Category;
use Session;
use Validator;
use Illuminate\Http\Request;

class PhoneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $phones = Phone::all();
        return view('phone.index')->with('phones', $phones);
    }

    /*
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('phone.create');
    }

    /*
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [

            'name' => 'required|max:20|min:3',
            'price' => 'required|max:20|min:3',
            'photo' => 'required|mimes:jpg,jpeg,png,gif',
            'description' => 'required|max:1000|min:10',
        ]);
          
        if ($validator->fails()) {
            return redirect('phone/create')
                ->withInput()
                ->withErrors($validator);
        }
    
        // Create The Post
        $photo = $request->file('photo');
        $upload = 'img/';
        $filename = time().$photo->getClientOriginalName();
        move_uploaded_file($photo->getPathName(), $upload. $filename);
    
        $phone = new Phone();
        $phone->name = $request->name;
        $phone->price = $request->price;
        $phone->photo = $filename;
        $phone->description = $request->description;
        $phone->save();
        Session::flash('phone_create','New data is created.');
        return redirect('phone/create');
    }

    /*
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $phone = Phone::findOrFail($id);
        return view('phone.detail')->with('phone', $phone);
    }

    /*
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $phone = Phone::findOrFail($id);
        return view('phone.edit')->with('phone', $phone);
    }



    /*
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
      'name' => 'required|max:20|min:3',
      'price' => 'required|max:20|min:3',
      'photo' => 'mimes:jpg,jpeg,png,gif',
      'description' => 'required|max:1000|min:10',
    ]);

    if ($validator->fails()) {
      return redirect('phone/'.$id.'/edit')
        ->withInput()
        ->withErrors($validator);
    }
        $phone = Phone::find($id);
    // Create The Post
    if($request->file('photo') != ""){
            $photo = $request->file('photo');
            $upload = 'img/';
            $filename = time().$photo->getClientOriginalName();
            move_uploaded_file($photo->getPathName(), $upload. $filename);
    }
    
    $phone->name = $request->Input('name');
    $phone->price = $request->Input('price');
    if(isset($filename)){
        $phone->photo = $filename;
    }
        
    $phone->description = $request->Input('description');
    $phone->save();

    Session::flash('phone_update','Data is updated');
    return redirect('phone/'.$phone->id.'/edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $phone = Phone::find($id);
      $photo_path = 'img/'.$phone->photo;
      File::delete($photo_path);
      $phone->delete();
      Session::flash('phone_delete','Data is deleted.');
      return redirect('phone');
    }
}
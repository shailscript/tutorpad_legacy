<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Institute;
use Session;
use Image;
use Storage;


class InstitutesController extends Controller
{
    public function __construct(){
      $this->middleware('auth:admin')->except('index', 'getSingle');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $institutes = Institute::paginate(9);
        return view('institute.index')->withInstitutes($institutes);
    }

    public function getSingle($id)
    {
        $institute = Institute::find($id);
        return view('institute.single')->withInstitute($institute);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('institute.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $this->validate( $request, array([
        //   'name'          => 'required|max:255',
        //   'tuition_type'  => 'required|max:255',
        //   'board_type'    => 'required',
        //   'class_from'    => 'required',
        //   'class_to'      => 'required',
        //   'email'         => 'required|email',
        //   'phone'         => 'required|max:10',
        //   'mobile'        => 'sometimes|max:10',
        //   'address'       => 'required|max:255',
        //   'location'      => 'required',
        //   'image'         => 'sometimes|image',
        //   'description'   => 'sometimes|max:255',
        //   ]));

        $institute = new Institute;
        $admin = Auth::guard('admin')->user();
        $institute->name = $request->name;
        $institute->tuition_type = $request->tuition_type;
        $institute->board_type = $request->board_type;
        $institute->class_from = $request->class_from;
        $institute->class_to = $request->class_to;
        $institute->email = $request->email;
        $institute->phone = $request->phone;
        $institute->mobile = $request->mobile;
        $institute->address = $request->address;
        $institute->location = $request->location;
        $institute->description = $request->description;

        if ($request->hasFile('featured_image')){
          $image = $request->file('featured_image');
          $filename =time() . '.' . $image->getClientOriginalExtension();
          $location = public_path('images/' . $filename);
          Image::make($image)->save($location);

          $institute->image = $filename;
        }

        $institute->admin()->associate($admin);
        $institute->save();

        Session::flash('success', 'Institute details have been recorded successfully');

        return redirect()->route('admin.dashboard');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $institute = Institute::find($id);
        return view('institute.show')->withInstitute($institute);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $institute = Institute::find($id);
      return view('institute.edit')->withInstitute($institute);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $institute = Institute::find($id);
        $admin = Auth::guard('admin')->user()->id;
        dd($request);
        $institute->name = $request->name;
        $institute->tuition_type = $request->tuition_type;
        $institute->board_type = $request->board_type;
        $institute->class_from = $request->class_from;
        $institute->class_to = $request->class_to;
        $institute->email = $request->email;
        $institute->phone = $request->phone;
        $institute->mobile = $request->mobile;
        $institute->address = $request->address;
        $institute->location = $request->location;
        $institute->description = $request->description;

        if ($request->hasFile('featured_image')){
          $image = $request->file('featured_image');
          $filename =time() . '.' . $image->getClientOriginalExtension();
          $location = public_path('images/' . $filename);
          Image::make($image)->save($location);
          $oldImage = $institute->image;

          $institute->image = $filename;

          Storage::delete($oldImage);
        }

        $institute->institute()->associate();

        $institute->save();

        Session::flash('success', 'Institute details have been updated successfully');

        return redirect()->route('admin.dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

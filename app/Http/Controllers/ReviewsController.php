<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Review;
use App\Institute;
use Session;

class ReviewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $review = new Review;
        $institute = Institute::find($request->institute_id);
        $this->validate($request, array([
          'education'       => 'required|integer',
          'infrastructure'  => 'required|integer',
          'faculties'       => 'required|integer',
          'review'          => 'required|max:255',
          'name'            => 'required|max:255',
          'email'           => 'required|max:255|email',
          ]));

        $review->name = $request->name;
        $review->email = $request->email;
        $review->edu = $request->education;
        $review->infra = $request->infrastructure;
        $review->faculty = $request->faculties;
        $review->review = $request->review;
        $review->institute()->associate($institute);

        $review->save();
        Session::flash('success', 'Your review has been saved successfully');
        return redirect()->route('institute.single', $institute->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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

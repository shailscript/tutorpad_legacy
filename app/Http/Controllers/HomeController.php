<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    public function index(){
      $data['cbse'] = DB::table('institutes')->where('board_type', 'CBSE')->count();
      $data['icse'] = DB::table('institutes')->where('board_type', 'ICSE')->count();
      $data['gseb'] = DB::table('institutes')->where('board_type', 'GSEB')->count();
        return view('boards')->withData($data);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Institute;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->only('index');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    public function boards()
    {
      $data['cbse'] = DB::table('institutes')->where('board_type', 'CBSE')->count();
      $data['icse'] = DB::table('institutes')->where('board_type', 'ICSE')->count();
      $data['gseb'] = DB::table('institutes')->where('board_type', 'GSEB')->count();
        return view('boards')->withData($data);
    }
    public function index(){
      $data['cbse'] = DB::table('institutes')->where('board_type', 'CBSE')->count();
      $data['icse'] = DB::table('institutes')->where('board_type', 'ICSE')->count();
      $data['gseb'] = DB::table('institutes')->where('board_type', 'GSEB')->count();
        return view('boards')->withData($data);
    }
}

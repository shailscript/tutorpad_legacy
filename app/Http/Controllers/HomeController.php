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

    public function locations()
    {
      $data['Bapunagar'] = DB::table('institutes')->where('location', 'Bapunagar')->count();
      $data['Kalupur'] = DB::table('institutes')->where('location', 'Kalupur')->count();
      $data['Shahibaug'] = DB::table('institutes')->where('location', 'Shahibaug')->count();
      $data['Bodakdev'] = DB::table('institutes')->where('location', 'Bodakdev')->count();
      $data['Maninagar'] = DB::table('institutes')->where('location', 'Maninagar')->count();
      $data['Vastrapur'] = DB::table('institutes')->where('location', 'Vastrapur')->count();
      $data['Ambawadi'] = DB::table('institutes')->where('location', 'Ambawadi')->count();
      $data['Ellis Bridge'] = DB::table('institutes')->where('location', 'Ellis Bridge')->count();
      $data['Navrangpura'] = DB::table('institutes')->where('location', 'Navrangpura')->count();
      $data['Naranpura'] = DB::table('institutes')->where('location', 'Naranpura')->count();
      $data['Naroda'] = DB::table('institutes')->where('location', 'Naroda')->count();
      $data['Paldi'] = DB::table('institutes')->where('location', 'Paldi')->count();
      $data['Bopal'] = DB::table('institutes')->where('location', 'Bopal')->count();
      $data['Ranip'] = DB::table('institutes')->where('location', 'Ranip')->count();
      $data['Gota'] = DB::table('institutes')->where('location', 'Gota')->count();
      $data['Sarkhej'] = DB::table('institutes')->where('location', 'Sarkhej')->count();
      $data['Vasna'] = DB::table('institutes')->where('location', 'Vasna')->count();
      $data['Vejalpur'] = DB::table('institutes')->where('location', 'Vejalpur')->count();
      $data['C. G. Road'] = DB::table('institutes')->where('location', 'C. G. Road')->count();
      $data['Law Garden'] = DB::table('institutes')->where('location', 'Law Garden')->count();
      $data['Lal Darwaja'] = DB::table('institutes')->where('location', 'Lal Darwaja')->count();
      $data['Satellite'] = DB::table('institutes')->where('location', 'Satellite')->count();
      $data['Motera'] = DB::table('institutes')->where('location', 'Motera')->count();
      $data['Chandkheda'] = DB::table('institutes')->where('location', 'Chandkheda')->count();
      $data['Odhav'] = DB::table('institutes')->where('location', 'Odhav')->count();
      $data['Sabarmati'] = DB::table('institutes')->where('location', 'Sabarmati')->count();
      $data['Gulbai Tekra'] = DB::table('institutes')->where('location', 'Gulbai Tekra')->count();
      $data['Memnagar'] = DB::table('institutes')->where('location', 'Memnagar')->count();
      $data['Shahpur'] = DB::table('institutes')->where('location', 'Shahpur')->count();
      $data['Thaltej'] = DB::table('institutes')->where('location', 'Thaltej')->count();

        return view('locations')->withData($data);
    }

    public function index(){
      $data['cbse'] = DB::table('institutes')->where('board_type', 'CBSE')->count();
      $data['icse'] = DB::table('institutes')->where('board_type', 'ICSE')->count();
      $data['gseb'] = DB::table('institutes')->where('board_type', 'GSEB')->count();
        return view('boards')->withData($data);
    }
}

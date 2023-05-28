<?php

namespace App\Http\Controllers;

use App\Models\Jurnal;
use Illuminate\Http\Request;

class JurnalController extends Controller
{
    public function index(){
        $data = Jurnal::all();
      //   dd($data);
        return view('jurnalguru',compact('data'));
     }

     public function tambahdata(){
        return view ('tambahdata');
     }

     public function insertdata(Request $request){
   //   dd($request->all());
      Jurnal::create($request->all());

     }


   }


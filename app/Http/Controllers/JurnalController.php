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
      // dd($request->all());
      Jurnal::create($request->all());
      return redirect()-> route ('jurnal');

     }

<<<<<<< HEAD
     public function tampilkandata(){
      $data = Jurnal::find($id);
      dd($data);
     }
    //   // return view ('tampildata', compact('data'));
     
=======
      public function tampilkandata($id){
        $data = Jurnal::find($id);
        // dd($data);
        return view('tampildata',compact('data'));
            
        
     }
>>>>>>> 36a2dd794edd058df5d54a9e01479d6bdcb158c9

}


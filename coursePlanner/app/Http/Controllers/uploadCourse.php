<?php

namespace App\Http\Controllers;

use App\Models\pdfCourse;
use Illuminate\Http\Request;

class uploadCourse extends Controller
{
    public function store(Request $request){
        $data = new pdfCourse();
        $file = $request->file;
        $filename=time().'.'.$file->getClientOriginalExtension();
        $request->file->move('assets/coursePdfs', $filename);
        $data->file= $filename;

        $data->name =  $request->name;
        $data->save();
        return redirect()->back();
    }

    public function download(){
        $data= pdfCourse::all();
        return view('showpdf', compact('data'));
    }
}

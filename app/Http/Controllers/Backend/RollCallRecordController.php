<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\RollCall;
use App\Model\StudentRegister;
Use Alert;
use Image;
use Storage;
use Redirect;
use Flash;
use DB;
class RollCallRecordController extends Controller
{
    
    public function index()
    {
        $rollcallrecords = StudentRegister::where('status', '=', 1)->where('gender', '=', 'female')->get();
        return view('admin.rollcallrecord.index',compact('rollcallrecords'));
    }
     public function show($id)
    {

        $rollcallrecords = StudentRegister::find($id);
        //dd($rollcallrecords);
        if (empty($rollcallrecords)) {
            Flash::error('RollCall not found');
            return redirect(route('rollcallrecord.index'));
        }

        return view('admin.rollcallrecord.show', compact('rollcallrecords'));
    }
    
  
   
}

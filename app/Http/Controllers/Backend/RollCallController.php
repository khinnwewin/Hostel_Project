<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\StudentRegister;
use App\Http\Requests\Frontend\StudentRegisterRequest;
Use Alert;
use Image;
use Storage;
use Redirect;
use Flash;
use App\Model\RollCall;
use App\Http\Requests\Backend\RollCallRequest;

class RollCallController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registers = StudentRegister::where('status', '=', 1)->where('gender', '=', 'female')->get();;
      //  dd($registers);
        return view('admin.rollcall.index',compact('registers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {

        //dd($request->all());

       // RollCall::create($request->all());
       //  Alert::success('Success', 'Successfully Created Roll Call');
       //  return redirect(route('rollcall.index'));
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
      $rollcall = StudentRegister::find($id);
     
      //dd($rollcall);
        if(empty($rollcall)) {
            Alert::error('Error', 'rollcall Not Found');
            return redirect(route('rollcall.index'));
        }
        return view('admin.rollcall.edit', compact('rollcall'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function update(Request $request,$id)
    {

         $roll = StudentRegister::find($id);
        // dd($roll);
        if(empty($roll)) {
            Alert::error('Error', 'Student Not Found');
            return redirect(route('rollcall.index'));
        }
        $form = $request->all();
       // dd($form);
        $form['student_registers_id'] = $id;
        RollCall::create($form);
        Alert::success('Success', 'Successfully Updated RollCall');
        return redirect(route('rollcall.index'));

    

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


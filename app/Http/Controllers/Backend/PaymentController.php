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
use App\Model\Payment;
use App\Http\Requests\Backend\PaymentRequest;
class PaymentController extends Controller
{
   public function index()
    {
        $registers = StudentRegister::where('status', '=', 1)->where('gender', '=', 'female')->get();;
        return view('admin.payment.index',compact('registers'));
    }
    public function edit($id)
    {
      $payment = StudentRegister::find($id);
     
      //dd($rollcall);
        if(empty($payment)) {
            Alert::error('Error', 'payment Not Found');
            return redirect(route('payment.index'));
        }
        return view('admin.payment.edit', compact('payment'));
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
         $payment = StudentRegister::find($id);
        // dd($roll);
        if(empty($payment)) {
            Alert::error('Error', 'Student Not Found');
            return redirect(route('payment.index'));
        }
        $form = $request->all();
      // dd($form);
        $form['student_registers_id'] = $id;
        Payment::create($form);
        Alert::success('Success', 'Successfully Updated payment');
        return redirect(route('payment.index'));

    

    }
      public function show($id)
    {

        $paymentrecords = StudentRegister::find($id);
        //dd($rollcallrecords);
        if (empty($paymentrecords)) {
        Flash::error('Payment not found');
            return redirect(route('payment.index'));
        }

        return view('admin.payment.show', compact('paymentrecords'));
    }
     
     public function destroy($id)
    {
       // return "aa";
        $paymentrecords = Payment::find($id);
       // dd($paymentrecords);
        if(empty($paymentrecords)) {
            Alert::error('Error', 'Payment Not Found');
            return redirect(route('payment.index'));
        }
        $paymentrecords->delete();
        Alert::success('Success', 'Successfully deleted payment');
        return redirect(route('payment.index'));
    }

}

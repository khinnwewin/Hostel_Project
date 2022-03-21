<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Fee;
use App\Model\Rule;

class AllController extends Controller
{
    public function fee(){
        $fees = Fee::paginate(25);
        return view('frontend.fee',compact('fees'));
    }
    public function rule(){
        $rules = Rule::paginate(25);
        return view('frontend.rule',compact('rules'));
    }
}

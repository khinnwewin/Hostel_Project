@extends('frontend.layout.app')
@section('content')
<h3 align="center"><b>2020-2021 Academic Year<br>Student Hostel Registration Form</b></h3>
<div class="container head">
<form method="post" action="{{ url('registration') }}" enctype="multipart/form-data">
  {{ csrf_field() }}
    <div class="form-group">
        <label for="exampleInputEmail1"><b>{{trans('app.roll_no')}}</b></label>
        <input type="text" class="form-control" name="rollno" placeholder="{{trans('app.enter_your_roll_no')}}">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1"><b>{{trans('app.name')}}</b></label>
        <input type="text" class="form-control" name="name" placeholder="{{trans('app.enter_your_roll_name')}}">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1"><b>{{trans('app.phone')}}</b></label>
        <input type="text" class="form-control" name="phone" placeholder="{{trans('app.enter_your_phno')}}">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1"><b>{{trans('app.email')}}</b></label>
        <input type="email" class="form-control" name="email" placeholder="{{trans('app.enter_your_email')}}">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1"><b>{{trans('app.address')}}</b></label>
        <input type="text" class="form-control" name="address" placeholder="{{trans('app.enter_your_address')}}">
    </div>
    <div class="form-check form-group">
        <input class="form-check-input" type="radio" name="gender" id="exampleRadios1" value="male">
        <label class="form-check-label" for="exampleRadios1"><b>{{trans('app.male')}}</b></label>
        <input class="form-check-input" type="radio" name="gender" id="exampleRadios2" value="female">
        <label class="form-check-label" for="exampleRadios2"><b>{{trans('app.female')}}</b></label>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1"><b>{{trans('app.nrc')}}</b></label>
        <input type="text" class="form-control" name="nrc" placeholder="{{trans('app.enter_your_nrc')}}">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1"><b>{{trans('app.father_name')}}</b></label>
        <input type="text" class="form-control" name="fname" placeholder="{{trans('app.enter_your_father_name')}}">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1"><b>{{trans('app.father_profession')}}</b></label>
        <input type="text" class="form-control" name="fpro" placeholder="{{trans('app.enter_your_father_profession')}}">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1"><b>{{trans('app.mother_name')}}</b></label>
        <input type="text" class="form-control" name="mname" placeholder="{{trans('app.enter_your_mother_name')}}">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1"><b>{{trans('app.mother_profession')}}</b></label>
        <input type="text" class="form-control" name="mpro" placeholder="{{trans('app.enter_your_mother_profession')}}">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1"><b>{{trans('app.parents_phno')}}</b></label>
        <input type="text" class="form-control" name="pphone" placeholder="{{trans('app.enter_your_parents_phno')}}">
    </div>
    <div class="form-group">
        <label for="image"><b>{{trans('app.image')}}</b></label>
        <input type="file" id="gallery-photo-add" class="form-control-file" name="image" multiple="">
        <div class="gallery"></div>
    </div><br>
  <button type="submit" class="btn btn-primary" style="margin-left: 3%;">{{trans('app.submit')}}</button>
</form>
</div>
@endsection

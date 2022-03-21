@extends('admin.layout.app')

@section('content')
    <section class="content-header">
        <h1>
            Edit Roll Call
        </h1>
        <span class="breadcrumb"><a href='{{ route("rollcall.index") }}' class="btn btn-sm btn-primary"><i
                    class="fa fa-arrow-circle-left"></i>&nbsp;&nbsp;Go To Roll Call</a></span>
    </section>
    <div class="content">
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                {!! Form::model($rollcall, ['route' => ['rollcall.update', $rollcall->id], 'method' => 'patch']) !!}
                      <div class="form-group col-sm-12">
                        {!! Form::label('id', 'student_registers_id:') !!} <span class="text-danger">*</span>
                        {!! Form::text('id', null, ['class' => 'form-control']) !!}
                        @if ($errors->has('id'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('id') }}</strong>
                            </span>
                       @endif
                    </div>
                    <div class="form-group col-sm-12">
                        {!! Form::label('rollno', 'Rollno:') !!} <span class="text-danger">*</span>
                        {!! Form::text('rollno', null, ['class' => 'form-control']) !!}
                        @if ($errors->has('rollno'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('rollno') }}</strong>
                            </span>
                       @endif
                    </div>
                    <div class="form-group col-sm-12">
                        {!! Form::label('name', 'Name:') !!} <span class="text-danger">*</span>
                        {!! Form::text('name', null, ['class' => 'form-control']) !!}
                        @if ($errors->has('name'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                       @endif
                    </div>
                     <div class="form-group col-sm-12">
                        {!! Form::date('date', 'Date:') !!} <span class="text-danger">*</span>
                       
                    </div>
                    <div class="form-group col-sm-6 mmtext">
                        {!! Html::decode(Form::label('attendance','Attendance:')) !!}
                       
                        <div class="radio">
                            <label>
                                {{ Form::radio('attendance', config('global')['STATUS_ACTIVE']) }} Active
                            </label>
                        </div>
                       
                        <div class="radio">
                            <label>
                                {{ Form::radio('attendance', config('global')['STATUS_INACTIVE']) }} Inactive
                            </label>
                        </div>
                       
                    </div>
                     <div class="form-group col-sm-12">
                        {!! Form::label('remark', 'Remark:') !!}<span class="text-danger">*</span>
                        {!! Form::textarea('remark', null, ['class' => 'form-control']) !!}
                   
                         @if ($errors->has('remark '))
                             <span class="text-danger">
                                 <strong>{{ $errors->first('remark ') }}</strong>
                             </span>
                        @endif
                    </div>

                   

                   

                    <div class="form-group col-sm-12">
                       {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                       <a href="{!! route('rollcall.index') !!}" class="btn btn-default">Cancel</a>
                    </div>
                    

               {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
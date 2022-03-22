@extends('admin.layout.app')

@section('content')
    <section class="content-header">
        <h1>
            Edit Payment
        </h1>
        <span class="breadcrumb"><a href='{{ route("mpayment.index") }}' class="btn btn-sm btn-primary"><i
                    class="fa fa-arrow-circle-left"></i>&nbsp;&nbsp;Go To Payment</a></span>
    </section>
    <div class="content">
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                {!! Form::model($payment, ['route' => ['mpayment.update', $payment->id], 'method' => 'patch']) !!}
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
                   
                    
                    </div>  

                    <div class="form-group col-sm-12">
                       {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                       <a href="{!! route('mpayment.index') !!}" class="btn btn-default">Cancel</a>
                    </div>

               {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
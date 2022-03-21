@extends('admin.layout.app')

@section('content')
    <section class="content-header">
        <h1>
            Create Fee
        </h1>
        <span class="breadcrumb"><a href='{{ route("fee.index") }}' class="btn btn-sm btn-primary"><i class="fa fa-arrow-circle-left"></i>&nbsp;&nbsp;Go To Fee</a></span>
    </section>
    <div class="content">
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                {!! Form::open(['route' => 'fee.store', 'files' => 'true']) !!}

                    <div class="form-group col-sm-12">
                        {!! Form::label('title', 'Title(eng):') !!} <span class="text-danger">*</span>
                        {!! Form::text('title', null, ['class' => 'form-control']) !!}
                        @if ($errors->has('title'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('title') }}</strong>
                            </span>
                       @endif
                    </div>
                    <div class="form-group col-sm-12">
                        {!! Form::label('mm_title', 'Title(mm):') !!} <span class="text-danger">*</span>
                        {!! Form::text('mm_title', null, ['class' => 'form-control']) !!}
                        @if ($errors->has('mm_title'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('mm_title') }}</strong>
                            </span>
                       @endif
                    </div>

                    <div class="form-group col-sm-12">
                        {!! Form::label('price', 'Price:') !!} <span class="text-danger">*</span>
                        {!! Form::number('price', null, ['class' => 'form-control']) !!}
                        @if ($errors->has('price'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('price') }}</strong>
                            </span>
                       @endif
                    </div>
                    <div class="form-group col-sm-12 mmtext">
                        {!! Form::label('content', 'Content(eng):') !!} <span class="text-danger">*</span>
                        <textarea id="content" class="form-control" name="content" rows="10" cols="50"></textarea>
                        @if ($errors->has('content'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('content') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group col-sm-12 mmtext">
                        {!! Form::label('content', 'Content(mm):') !!} <span class="text-danger">*</span>
                        <textarea id="content" class="form-control" name="mm_content" rows="10" cols="50"></textarea>
                        @if ($errors->has('content'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('content') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group col-sm-12">
                       {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                       <a href="{!! route('fee.index') !!}" class="btn btn-default">Cancel</a>
                    </div>

               {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
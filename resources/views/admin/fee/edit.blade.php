@extends('admin.layout.app')

@section('content')
    <section class="content-header">
        <h1>
            Edit Fee
        </h1>
        <span class="breadcrumb"><a href='{{ route("fee.index") }}' class="btn btn-sm btn-primary"><i
                    class="fa fa-arrow-circle-left"></i>&nbsp;&nbsp;Go To Fee</a></span>
    </section>
    <div class="content">
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                {!! Form::model($fee, ['route' => ['fee.update', $fee->id], 'method' => 'patch']) !!}

                     <div class="form-group col-sm-12 mmtext">
                        {!! Form::label('title', 'Title(eng):') !!} <span class="text-danger">*</span>
                        <input type="text" name="title" value="{{ en($fee->title) }}" class="form-control">
                        @if ($errors->has('title'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('title') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group col-sm-12 mmtext">
                        {!! Form::label('title', 'Title(mm):') !!} <span class="text-danger">*</span>
                        <input type="text" name="mm_title" value="{{ mm($fee->title) }}" class="form-control">
                        @if ($errors->has('title'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('title') }}</strong>
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
                     <div class="form-group col-sm-12">
                        {!! Form::label('content', 'remark(eng):') !!} <span class="text-danger">*</span>
                        <textarea name="content" class="form-control" rows="10" cols="50">{{ en($fee->content) }}</textarea>
                         @if ($errors->has('content'))
                             <span class="text-danger">
                                 <strong>{{ $errors->first('content') }}</strong>
                             </span>
                        @endif
                    </div>
                    <div class="form-group col-sm-12">
                        {!! Form::label('content', 'remark:(mm)') !!} <span class="text-danger">*</span>
                        <textarea name="mm_content" class="form-control" rows="10" cols="50">{{ mm($fee->content) }}</textarea>
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
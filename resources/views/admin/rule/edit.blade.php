@extends('admin.layout.app')

@section('content')
    <section class="content-header">
        <h1>
            Edit Rule
        </h1>
        <span class="breadcrumb"><a href='{{ route("rule.index") }}' class="btn btn-sm btn-primary"><i
                    class="fa fa-arrow-circle-left"></i>&nbsp;&nbsp;Go To Rule</a></span>
    </section>
    <div class="content">
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                {!! Form::model($rule, ['route' => ['rule.update', $rule->id], 'method' => 'patch']) !!}
                     <div class="form-group col-sm-12">
                        {!! Form::label('description', 'description(eng):') !!} <span class="text-danger">*</span>
                        <textarea name="description" class="form-control" rows="10" cols="50">{{ en($rule->description) }}</textarea>
                         @if ($errors->has('description'))
                             <span class="text-danger">
                                 <strong>{{ $errors->first('description') }}</strong>
                             </span>
                        @endif
                    </div>
                    <div class="form-group col-sm-12">
                        {!! Form::label('description', 'description:(mm)') !!} <span class="text-danger">*</span>
                        <textarea name="mm_description" class="form-control" rows="10" cols="50">{{ mm($rule->description) }}</textarea>
                         @if ($errors->has('description'))
                             <span class="text-danger">
                                 <strong>{{ $errors->first('description') }}</strong>
                             </span>
                        @endif
                    </div>

                    <div class="form-group col-sm-12">
                       {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                       <a href="{!! route('rule.index') !!}" class="btn btn-default">Cancel</a>
                    </div>

               {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
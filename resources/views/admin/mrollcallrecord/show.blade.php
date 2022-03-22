@extends('admin.layout.app')

@section('content')
    <section class="content-header">
        <h1>
             Male Roll Call Record Details
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>
        <div class="clearfix"></div>

        <!-- Flash -->
        
        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
              
                    {!! Form::model($rollcallrecords, ['route' => ['mrollcallrecord.update', $rollcallrecords->id], 'method' => 'patch']) !!}
                    {{ csrf_field() }}
                    <table class="table table-striped table-hover tbl_repeat" id="sortable">
                           
                            <tr>
                                <td>Roll No:</td>
                                <td>{!! $rollcallrecords->rollno !!}</td>
                            </tr>
                            <tr>
                                <td>Name</td>
                                <td>{!! $rollcallrecords->name !!}</td>
                            </tr>
                            @foreach(getRecord($rollcallrecords->id) as $record)
                            <tr>
                                    <td>{!! $record->date !!}</td>
                                    <td>{!! showPrettyAttendance($record->attendance) !!}</td>
                            </tr>
                            <tr>
                                <td>Remark:</td>
                                <td>{!! $record->remark!!}</td>
                            </tr>
                             @endforeach
                            
                           
                    </table>
                    <div class="form-group col-sm-12">
                      
                       <a href="{!! route('mrollcallrecord.index') !!}" class="btn btn-default">Cancel</a>
                    </div>
                    {!! Form::close() !!}
                <!-- </form> -->
            </div>
        </div>
    </div>
@endsection
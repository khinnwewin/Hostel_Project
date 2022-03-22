@extends('admin.layout.app')

@section('content')
    <section class="content-header">
        <h1>
           Payment Record Details
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>
        <div class="clearfix"></div>

        <!-- Flash -->
        
        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
              
                    {!! Form::model($paymentrecords, ['route' => ['mrollcallrecord.update', $paymentrecords->id], 'method' => 'patch']) !!}
                    {{ csrf_field() }}
                    <table class="table table-striped table-hover tbl_repeat" id="sortable">
                           
                            <tr>
                                <td>Roll No:</td>
                                <td>{!! $paymentrecords->rollno !!}</td>
                            </tr>
                            <tr>
                                <td>Name</td>
                                <td>{!! $paymentrecords->name !!}</td>
                            </tr>
                            @foreach(getPayment($paymentrecords->id) as $payment)
                            <tr>
                                <td>{!! $payment->date !!}</td>
                                <td><a href="#" type="button" data-id="{{ $payment->id }}"
                               class="btn btn-xs btn-danger" data-toggle="modal"
                               data-url="{{ url('admin/mpayment/'.$payment->id) }}"
                               data-target="#deleteFormModal"><i
                                    class="fa fa-trash-o"></i>&nbsp;Delete</a>
                            </td></td>
                                   
                            </tr>
                    
                             @endforeach
                            
                           
                    </table>
                    <div class="form-group col-sm-12">
                      
                       <a href="{!! route('mpayment.index') !!}" class="btn btn-default">Cancel</a>
                    </div>
                    {!! Form::close() !!}
                <!-- </form> -->
            </div>
        </div>
    </div>
@endsection
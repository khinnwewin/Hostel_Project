@extends('admin.layout.app')

@section('content')
    <section class="content-header">
        <h1>
          Male Payment
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">

                <table class="table table-striped table-hover tbl_repeat" id="sortable">
                    <thead>
                        <th>No.</th>
                        <th>Roll No</th>
                        <th>Name</th>
                        <th colspan="3">View Details</th>
                       
                    </thead>
                    <tbody>
                    <?php $index = 1; ?>
                    @foreach($registers as $register)
                        <tr>
                            <td>{{ $index++ }}</td>
                            <td>{!! $register->rollno !!}</td>
                            <td>{!! $register->name !!}</td>
                             <td>
                                <div class='btn-group'>
                                    <a href="{!! route('mpayment.edit', [$register->id]) !!}" class='btn btn-default btn-xs'>Pay</a>
                                </div>
                                 <div class='btn-group'>
                                    <a href="{!! route('mpayment.show', [$register->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                                </div>
                            </td> 
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                
            </div>
        </div>
    </div>
@endsection
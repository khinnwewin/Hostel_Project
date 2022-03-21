@extends('frontend.layout.app')
@section('content')
<center><h3><b>{{trans('app.selected_students_list_all')}}</b></h3></center>
    <div class="content table-m-50">
        <table>
            <thead>
                <th>{{trans('app.no')}}</th>
                <th>{{trans('app.roll_no')}}</th>
                <th>{{trans('app.name')}}</th>
                <th>{{trans('app.phone')}}</th>
                <th>{{trans('app.father_name')}}</th>
            </thead>
            <tbody>
            <?php $index = 1; ?>
            @foreach($registers as $register)
                <tr style="width: 100px;height: 50px;">
                    <td>{{ $index++ }}</td>
                    <td>{!! $register->rollno !!}</td>
                    <td>{!! $register->name !!}</td>
                    <td>{!! $register->phone !!}</td>
                    <td>{!! $register->fname !!}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
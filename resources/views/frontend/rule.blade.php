@extends('frontend.layout.app')
@section('content')
 <div><center><h3><b>{{trans('app.hostel_rules')}}</b></h3></center></div>

    <div class="content table-m-50">
        <table>
            <thead>
                <th>{{trans('app.no')}}</th>
                <th>{{trans('app.description')}}</th>
            </thead>
            <tbody>
            <?php $index = 1; ?>
            @foreach($rules as $rule)
                <tr style="width: 100px;height: 50px;">
                    <td>{{ $index++ }}</td>
                    <td>{{ languageSwitcher($rule->description) }}</td> 
                </tr>
            @endforeach
            </tbody>
        </table>             
    </div>
@endsection
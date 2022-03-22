@if(Auth::user()->usertype == 'ADMIN')
<li class="{{ Request::is('user*') ? 'active' : '' }}">
    <a href="{{ route('user.index') }}"><i class="fa fa-edit"></i><span>Users</span></a>
</li>
@endif
<!-- male -->
@if(Auth()->user()->usertype == 'MALE' || Auth::user()->usertype == 'ADMIN')
<li class="{{ Request::is('register*') ? 'active' : '' }}">
    <a href="{{ url('register/index') }}"><i class="fa fa-edit"></i><span>Registrated Students(male)</span></a>
</li>
<li class="{{ Request::is('select*') ? 'active' : '' }}">
    <a href="{{ route('select.index') }}"><i class="fa fa-edit"></i><span>Selected Students(male)</span></a>
</li>
<li class="{{ Request::is('mrollcall*') ? 'active' : '' }}">
    <a href="{{ route('mrollcall.index') }}"><i class="fa fa-edit"></i><span>Roll Call(male)</span></a>
</li>
@endif

<!-- female -->
@if(Auth()->user()->usertype == 'FEMALE' || Auth::user()->usertype == 'ADMIN')
<li class="{{ Request::is('fregister*') ? 'active' : '' }}">
    <a href="{{ url('fregister/index') }}"><i class="fa fa-edit"></i><span>Registrated Students(female)</span></a>
</li>
<li class="{{ Request::is('fselect*') ? 'active' : '' }}">
    <a href="{{ route('fselect.index') }}"><i class="fa fa-edit"></i><span>Selected Students(female)</span></a>
</li>
<li class="{{ Request::is('rollcall*') ? 'active' : '' }}">
    <a href="{{ route('rollcall.index') }}"><i class="fa fa-edit"></i><span>Roll Call(female)</span></a>
</li>
@endif

<li class="{{ Request::is('fee*') ? 'active' : '' }}">
    <a href="{{ route('fee.index') }}"><i class="fa fa-edit"></i><span>Fee</span></a>
</li>
<li class="{{ Request::is('rule*') ? 'active' : '' }}">
    <a href="{{ route('rule.index') }}"><i class="fa fa-edit"></i><span>Rule</span></a>
</li>



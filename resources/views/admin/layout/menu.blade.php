<li class="{{ Request::is('fee*') ? 'active' : '' }}">
    <a href="{{ route('fee.index') }}"><i class="fa fa-edit"></i><span>Fee</span></a>
</li>
<li class="{{ Request::is('rule*') ? 'active' : '' }}">
    <a href="{{ route('rule.index') }}"><i class="fa fa-edit"></i><span>Rule</span></a>
</li>
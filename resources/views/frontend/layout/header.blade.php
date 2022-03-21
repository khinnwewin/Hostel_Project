@include('frontend.layout.css')
<section class="mobile">
    <div class="ed-mob-menu">
        <div class="ed-mob-menu-con">
            <div class="ed-mm-left">
                <div class="wed-logo">
                    <a href="{{url('/')}}"><img src="{{asset('edu/images/logo.jpeg')}}" alt="" style="border-radius: 2em 1em;width: 180px;height: 60px;" />
                    </a>
                </div>
            </div>
            <div class="ed-mm-right">
                <div class="ed-mm-menu">
                    <a href="#" class="ed-micon"><i class="fa fa-bars"></i></a>
                    <div class="ed-mm-inn">
                        <a href="#" class="ed-mi-close"><i class="fa fa-times"></i></a>
                        <h4><a href="{{url('/')}}" style="color:#223358;">Home</a></h4>
                        <h4><a href="{{url('rule')}}" class="mm-arr" style="color:#223358;">Rules</a></h4>
                        <h4><a href="{{url('fee')}}" class="mm-arr" style="color:#223358;">Hostal Fee</a></h4>
                        <h4><a href="{{url('registration')}}" style="color:#223358;">Student Registration Form</a></h4>
                        <h4><a href="{{url('select')}}" style="color:#223358;">Selected Students List(Male)</a></h4>
                        <h4><a href="{{url('fselect')}}" style="color:#223358;">Selected Students List(Female)</a></h4>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="head">
        <div class="top-logo" data-spy="affix" data-offset-top="250" style="">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="wed-logo">
                            <a href="{{url('/')}}"><img src="{{asset('edu/images/logo.jpeg')}}" style="border-radius: 2em 1em;width: 180px;height: 60px;color:white;" alt="" />
                            </a>
                        </div>
                        <div class="main-menu">
                            <ul>
                                <li><a href="{{url('/')}}" style="color:white;">{{trans('app.home')}}</a>
                                </li>
                                <li class="about-menu">
                                    <a href="{{url('rule')}}" class="mm-arr" style="color:white;">{{trans('app.rules')}}</a>
                                </li>
                                <li class="admi-menu">
                                    <a href="{{url('fee')}}" class="mm-arr" style="color:white;">{{trans('app.hostal_fee')}}</a>
                                </li>
                                <li><a href="{{url('registration')}}" style="color:white;">{{trans('app.registration_form')}}</a></li>  
                                <li><a href="{{url('select')}}" style="color:white;">{{trans('app.selected_students_list')}}</a></li> 
                                <li><a href="{{url('fselect')}}" style="color:white;">{{trans('app.selected_students_list_female')}}</a></li>  
                            </ul>
                        </div>
                    </div>
                    <div class="all-drop-down-menu">
                    </div>
                </div>
                <div class="pull-right ">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color:white;"><img src="{{ asset('images/mm.png') }}" width="30px" height="20px">Myanmar</a>
                        <ul class="dropdown-menu animated">
                            <li><a href="#" id="locale" value="mm"><img src="{{ asset('images/mm.png') }}" width="30px" height="20px"> Myanmar</a></li>
                            <li><a href="#" id="locale" value="en"><img src="{{ asset('images/en.png') }}" width="30px" height="20px"> English</a></li> 
                        </ul>
                         <input type="hidden" id="languageUrl" value="{{ url('changelanguage') }}">
                    </li>
                </div>            
            </div>
            
        </div>
    </section>
@include('frontend.layout.javascript')
    

  
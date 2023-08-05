<div class="meeta-header-section meeta-header-2">
    <!-- Header Middle Start -->
    <div class="header-middle header-sticky">
        <div class="container">
            <div class="header-wrap">
                <!-- Header Logo Start -->
                <div class="header-logo">
                    <a href="{{url('/')}}"><img style="width:auto; height: 64px;" src="/frontend/assets/images/logo.png" alt="Logo"></a>
                </div>
                <!-- Header Logo End -->
                <!-- Header Navigation Start -->
                <div class="header-navigation d-none d-lg-block">
                    <ul class="main-menu">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li><a>About</a>
                            <ul class="sub-menu">
                                <li><a href="{{url('about-organizer')}}">About Organizers</a></li>
                                <li><a href="{{url('about-event')}}">About Event</a></li>
                            </ul>
                        </li>
                        <li><a href="{{url('schedule')}}">Schedule </a>
                        <li><a href="{{url('speaker')}}">Speakers </a></li>
                        <li><a href="{{url('contact')}}">Contact</a></li>
                        <li><a>Archive</a>
                            <ul class="sub-menu">
                                <li><a href="https://bdeducationforum.com/2022/public/">Archive-2022</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- Header Navigation End -->
                <!-- Header Meta Start -->
                <div class="header-meta ">
                    <div class="header-btn d-none d-lg-block" style="margin-left: 0px;">
                        <a class="btn btn-primary" style="border-radius: 12px;" href="/frontend/assets/brochure/brochure.pdf" target="_blank">Brochure</a>
                    </div>
                    <div class="header-btn d-none d-lg-block" style="margin-left: 0px;">
                        <a href="" style="border-radius: 12px;" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">Register</a>
                    </div>
                    <!-- Header Toggle Start -->
                    <div class="header-toggle d-lg-none">
                        <button data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                    <!-- Header Toggle End -->
                    <!-- Modal -->
                </div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    </div>
                @endif

                @if(session()->get('success'))
                    <div class="alert alert-success mt-3 p-2" style="margin-left: 8px;">
                    {{ session()->get('success') }}  
                    </div><br />
                @endif
                <!-- Header Meta End -->
            </div>
        </div>
    </div>
    <!-- Header Middle End -->
</div>
<div class="offcanvas offcanvas-start" id="offcanvasExample">
    <div class="offcanvas-header">
        <!-- Offcanvas Logo Start -->
        <div class="offcanvas-logo">
            <a href="{{url('/')}}"><img src="/frontend/assets/images/logo.png" alt=""></a>
        </div>
        <!-- Offcanvas Logo End -->
        <button type="button" class="close-btn" data-bs-dismiss="offcanvas"><i class="flaticon-close"></i></button>
    </div>

    <!-- Offcanvas Body Start -->
    <div class="offcanvas-body">
        <div class="offcanvas-menu offcanvas-menu-2">
            <ul class="main-menu">
                <li class="active-menu"><a href="{{url('/')}}">Home</a></li>
                <li><a href="#">About</a>
                    <ul class="sub-menu">
                        <li><a href="{{url('about-organizer')}}">About Organizers</a></li>
                        <li><a href="{{url('about-event')}}">About Event</a></li>
                    </ul>
                </li>
                <li><a href="{{url('schedule')}}">Schedule </a></li>
                <li><a href="{{url('speaker')}}">Speakers </a></li>
                <li><a href="{{url('contact')}}">Contact Us</a></li>
                <li><a href="#">Archive</a>
                    <ul class="sub-menu">
                        <li><a href="https://bdeducationforum.com/2022/public/">Archive-2022</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- <div class="justify-content-between align-items-center d-flex">
            <div class="header-btn">
                <a class="btn btn-primary" style="border-radius: 12px; line-height: 43px;" href="/frontend/assets/brochure/brochure.pdf" target="_blank">Brochure</a>
            </div>
            <div class="header-btn">
                <a href="" style="border-radius: 12px; line-height: 43px;" class="btn btn-primary" data-toggle=" modal" data-target="#exampleModalCenter">Register</a>
            </div>
        </div>  --> 
        <div class="header-btn d-grid">
            <a class="btn btn-primary" style="border-radius: 12px; line-height: 46px;" href="/frontend/assets/brochure/brochure.pdf" target="_blank">Brochure</a>
        </div>
    </div>
    <!-- Offcanvas Body End -->
</div>
<div class="clearfix"></div>
@if ($errors->any())
    <div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
    </div>
@endif

@if(session()->get('success'))
    <div class="alert alert-success mt-3 p-2" style="margin-left: 8px;">
    {{ session()->get('success') }}  
    </div><br />
@endif
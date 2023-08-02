
@extends('frontend.layouts.app')

@section('content')

<div class="meeta-hero-section-6" style="background-image: url(frontend/assets/images/pic-5.jpg);"></div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-7 col-md-6" data-aos-delay="500" data-aos="fade-up" style="padding: 0px;">
                <a class="btn-2" href="{{url('frontend/assets/brochure/brochure.pdf')}}" target="_blank">Download Brochure</a>
            </div>
            <div class="col-5 col-md-6" data-aos-delay="500" data-aos="fade-up" style="padding: 0px;">
                <a href="" class="btn-2" style="float: right;" data-toggle="modal" data-target="#exampleModalCenter">Register Here</a>
            </div>
        </div>
        <div class="clearfix"></div>
        <!-- Slider Section End -->
        <!-- =============================================================================================== -->

        <div class="clearfix"></div>

        <!-- Features Section Start -->
        <div class="meeta-features-section">
            <div class="shape-1" data-aos-delay="700" data-aos="zoom-in"></div>
            <div class="container">
                <div class="meeta-features-wrap">
                    <!-- <h2>Bangladesh Education Landscape</h2> -->
                    <div class="row">
                        <!-- ------------ -->
                        <div class="feature-item feature-3">
                            <div class="feature-content">
                                <h3 class="title"><a>Bangladesh Education Forum 2022 Organizers</a></h3>
                                <p style="font-size: 17px; text-align: justify;">
                                    Bangladesh Education Forum 2022 is a joint initiative by Pan Asian Group, 
                                    a group of Dubai-based marketing, event management, public relations and 
                                    media organizations, and Spiral World, a Dhaka-based physical and digital 
                                    events management and marketing consultancy.
                                </p>
                            </div>
                        </div>
                        <!-- ------------- -->
                        <div class="feature-item feature-3">
                            <div class="feature-content">
                                <h4 class="sub-title" style="color: #7fb703;">About</h4>
                                <h3 class="title"><a>Pan Asian Group</a></h3>
                                <p>
                                    Pan Asian Group is a Dubai-based Marketing, Public Relations, 
                                    Publishing and Media Advisory also engaged in Exhibition, Conference and 
                                    Business Events in the UAE, with 14 years’ experience. Pan Asian Group is a 
                                    group of two companies:
            
                                    <p class="p-3">1. Pan Asian Media MFZ-LLC and <br>
                                        2. Pan Asian Exhibition LLC</p><br>
            
                                    <p>Both companies are headquartered in Dubai, UAE. Portfolio of activities:</p>
                                    <p class="p-3">1.	Publishing : Business magazines, periodicals, supplements and books<br>
                                        2.	Public Relations : 360-degree media relations and image management services<br>
                                        3.	Media Consultancy : Research consultancy for clients on specific areas<br>
                                        4.	Exhibition : Business and trade exhibitions, booth and marketing activities<br>
                                        5.	Conference : Business conferences on specific sectors and issues</p>
                            </div>
                        </div>
                        <!-- ------------ -->
                        <div class="feature-item feature-3">
                            <div class="feature-content">
                                <h4 class="sub-title" style="color: #7fb703;">About</h4>
                                <h3 class="title"><a>Spiral World</a></h3>
                                <p style="font-size: 17px; text-align: justify;">
                                    Spiral World is the first-ever 3D Virtual Event Platform in Bangladesh. 
                                    It makes any kind of on ground event, exhibition, trade show and conference 
                                    imaginable into 3D Virtual Event platform. It also organizes physical events 
                                    and hybrid Physical and Digital or Physital events for clients and industries. 
                                    Spiral World builds live studio set up for live video hosting where its crew 
                                    can shoot live on the green screen, add motion graphical content, and broadcast live.
                                </p>
                            </div>
                        </div>
                        <!-- ------------- -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Features Section End -->
    </div>
@endsection
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

        <!-- Contact Info Start -->
        <div class="section contact-info-section" style="padding-top: 50px;">
            <div class="container">
                <!-- Contact Info Wrap Start -->
                <div class="contact-info-wrap">
                    <h3 style="text-align: center;">For participation and booking inquiries, kindly contact:</h3>
                    <div class="row">
                        <div class="col-lg-4 col-sm-4">
                            <!--Single Contact Info Start -->
                            <div class="single-contact-info text-center">
                                <div class="info-icon color-2">
                                    <i class="flaticon-phone-call"></i>
                                </div>
                                <div class="info-content" style="font-size: 17px;">
                                    <h5 class="title">Saifur Rahman</h5><br>
                                    Exhibition Organiser and Chief Executive Officer<br>
                                    Pan Asian Group<br>
                                    541A, Office Tower, Al Ghurair Centre, Al Riqqa<br>
                                    PO Box : 39865, Dubai, UAE<br>
                                    Tell : +9714 2281021<br>
                                    Cell : +97150 5534489<br>
                                    Email : s.rahman@panasian1.com  
                                    <!-- <p>+458 123 657 2324</p> -->
                                </div>
                            </div>
                            <!--Single Contact Info End -->
                        </div>

                        <div class="col-lg-4 col-sm-4">
                            <!--Single Contact Info Start -->
                            <div class="single-contact-info text-center">
                                <div class="info-icon color-2">
                                    <i class="flaticon-phone-call"></i>
                                </div>
                                <div class="info-content" style="font-size: 17px;">
                                    <h5 class="title">Shayaree Islam</h5><br>
                                    Account Manager<br>
                                    Pan Asian Group<br>
                                    PO Box : 39865, Dubai, UAE<br>
                                    Tell : +97142281021 (Dubai)<br>
                                    Cell : +880 17 3764 0219 (Dhaka)<br>
                                    Cell : +971521737484 (What’s App only)<br>
                                    Email : s.islam@panasian1.com  
                                    <!-- <p>+458 123 657 2324</p> -->
                                </div>
                            </div>
                            <!--Single Contact Info End -->
                        </div>
                        
                        <div class="col-lg-4 col-sm-4">
                            <!--Single Contact Info Start -->
                            <div class="single-contact-info text-center">
                                <div class="info-icon color-1">
                                    <!-- <i class="flaticon-email"></i> -->
                                    <i class="flaticon-phone-call"></i>
                                </div>
                                <div class="info-content" style="font-size: 17px;">
                                    <h5 class="title">Tarekol Islam Sobuj </h5><br>
                                    Business Coordinator <br>
                                    Spiral World, Bangladesh <br>
                                    Address: 64/3 Lake Circus, Kolabagan,<br>
                                    Mirpur Road, Dhaka, 1205, Bangladesh<br>
                                    Cell : +8801847140059<br>
                                    Email : business@spiralworld.biz

                                    <!-- <p>info@techmax.nl</p> -->
                                </div>
                            </div>
                            <!--Single Contact Info End -->
                        </div>
                    </div>
                </div>
                <!-- Contact Info Wrap End -->
            </div>
        </div>
        <!-- Contact Info End -->

        <!-- Contact Form Start -->
        <!-- <div class="contact-form-section section-padding">
            <div class="container">
                <div class="contact-wrap">
                    <div class="row justify-content-center">
                        <div class="col-lg-10">
                            <div class="form-title text-center">
                                <h2 class="title">Sent Us A Message</h2>
                            </div>
                            <div class="contact-form-wrap">
                                <form action="#">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="single-form">
                                                <input class="form-control" type="text" placeholder="Your Name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="single-form">
                                                <input class="form-control" type="email" placeholder="Your Email">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="single-form">
                                                <input class="form-control" type="text" placeholder="Your Number">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="single-form">
                                                <input class="form-control" type="text" placeholder="Subject">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="single-form">
                                                <textarea class="form-control" placeholder="Write A Message"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-btn text-center">
                                                <button class="btn btn-primary" type="submit">Submit Now</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Contact Form End -->


        <!-- Contact Map Start -->
        <div class="section contact-map-section">
            <div class="contact-map-wrap">
                <iframe id="gmap_canvas" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3608.004712907555!2d55.3271394!3d25.2704269!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f5cc7b694f147%3A0x4c671d98bc9398fe!2sCrowne%20Plaza%20Dubai%20-%20Deira!5e0!3m2!1sen!2sbd!4v1664014791082!5m2!1sen!2sbd"></iframe>
            </div>
        </div>
        <!-- Contact Map End -->
    </div>

@endsection
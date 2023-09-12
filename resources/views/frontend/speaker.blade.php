@extends('frontend.layouts.app')

@section('content')

        <div class="clearfix"></div>
        <!-- Slider Section Start  -->
        <div class="meeta-hero-section-6" style="background-image: url(frontend/assets/images/pic-5.jpg);"></div>
        <div class="clearfix"></div>
        <div class="row d-lg-none">
            <div class="col-7 col-md-6" data-aos-delay="500" data-aos="fade-up" style="padding: 0px;">
                <a class="btn-2" href="{{url('frontend/assets/brochure/brochure.pdf')}}" target="_blank">Download Brochure</a>
            </div>
            <div class="col-5 col-md-6" data-aos-delay="500" data-aos="fade-up" style="padding: 0px;">
                <a href="" class="btn-2" style="float: right;" data-toggle="modal" data-target="#exampleModalCenter">Register Here</a>
            </div>
        </div>
        <div class="clearfix"></div>


        <!-- Special Speakers Start -->
        <div class="meeta-speakers section-padding">
            <div class="container">
                <!-- Section Title Start -->
                <div class="meeta-section-title text-center">
                    <!-- <h4 class="sub-title">Speakers</h4> -->
                    <h2 class="main-title">Cheif Guest</h2>
                </div>
                <!-- Section Title End -->

                <div class="row gy-5 meeta-speakers-row">
                    <!--<div class="col-lg-6 col-sm-6 " style="margin: 0 auto;">-->
                    <!--    <div class="single-speaker">-->
                    <!--        <div class="speaker-image">-->
                    <!--            <a href=""><img src="frontend/assets/images/speaker/dipu-moni.png" alt="Speaker"></a>-->
                    <!--        </div>-->
                    <!--        <div class="speaker-content">-->
                    <!--            <div class="speaker-content-box">-->
                    <!--                <h4 class="speaker-name"><a href="">Dr. Dipu Moni, MP</a></h4>-->
                    <!--                <p class="speaker-designation pt-3">Honorable Minister, <br>Ministry of Educatiuon<br>Government of Bangladesh</p>-->
                    <!--            </div>-->
                    <!--            <img class="speaker-shape-1" src="frontend/assets/images/shape/shape-8.png" alt="">-->
                                
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->
                    
                    <div class="col-lg-6 col-sm-6 " style="margin: 0 auto;">
                        <!-- Single Speakers Start -->
                        <div class="single-speaker">
                            <div class="speaker-image">
                                <a href=""><img src="frontend/assets/images/speaker/mohibul.png" alt="Speaker"></a>
                            </div>
                            <div class="speaker-content">
                                <div class="speaker-content-box">
                                    <h4 class="speaker-name"><a href="">HE Mohibul Hassan Chowdhury</a></h4>
                                    <p class="speaker-designation pt-3">Deputy Minister, <br>Ministry of Education<br>Government of Bangladesh</p>
                                </div>
                                <img class="speaker-shape-1" src="frontend/assets/images/shape/shape-8.png" alt="">
                            </div>
                        </div>
                        <!-- Single Speakers End -->
                    </div>
                </div>

            </div>
        </div>
        <!-- Speakers End -->

        <!-- Speakers Start -->
         <div class="meeta-speakers-2 section-padding" style="padding-bottom: 67px;">
            <div class="container">
                <div class="meeta-speakers-wrap">
                    <div class="meeta-section-title-2 text-center">
                        <h4 class="sub-title">Speakers</h4>
                        <h2 class="main-title text-white">Special Guest</h2>
                    </div>
                    <div class="meeta-speakers-content-wrap-2">
                        <div class="row">

                            <!-- <div class="col-lg-4 col-sm-6">
                                <div class="single-speaker-2 color-1 text-center">
                                    <div class="shape-2">
                                        <img src="frontend/assets/images/shape/sp-shape-2.png" alt="">
                                    </div>
                                    <div class="speaker-image">
                                        <div class="image">
                                            <a href="speaker-single.html"><img src="frontend/assets/images/speaker/Abu_Zafar.jpg" alt="Speaker"></a>
                                        </div>
                                        <div class="shape-1">
                                            <img src="frontend/assets/images/shape/sp-shape-1.png" alt="">
                                        </div>
                                    </div>
                                    <div class="speaker-content">
                                        <h4 class="speaker-name"><a href="speaker-single.html">HE M Abu Zafar</a></h4>
                                        <p class="speaker-designation">Bangladesh Ambassador to UAE</p>
                                    </div>
                                </div>
                            </div> -->
                            <div class="col-lg-4 col-sm-6">
                                <div class="single-speaker-2 color-5 text-center">
                                    <div class="shape-2">
                                        <img src="frontend/assets/images/shape/sp-shape-2.png" alt="">
                                    </div>
                                    <div class="speaker-image">
                                        <div class="image">
                                            <a href="speaker-single.html"><img src="frontend/assets/images/speaker/Professor Dr. Biswajit Chanda.jpg" alt="Speaker"></a>
                                        </div>
                                        <div class="shape-1">
                                            <img src="frontend/assets/images/shape/sp-shape-1.png" alt="">
                                        </div>
                                    </div>
                                    <div class="speaker-content">
                                        <h4 class="speaker-name"><a href="speaker-single.html">Professor Dr. Biswajit Chanda</a></h4>
                                        <p class="speaker-designation">Member,<br> University Grants Commission of Bangladesh</p>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="col-lg-4 col-sm-6">
                                <div class="single-speaker-2 color-2 text-center">
                                    <div class="shape-2">
                                        <img src="frontend/assets/images/shape/sp-shape-2.png" alt="">
                                    </div>
                                    <div class="speaker-image">
                                        <div class="image">
                                            <a href="speaker-single.html"><img src="frontend/assets/images/speaker/Kazi_Anis_Ahmed.jpg" alt="Speaker"></a>
                                        </div>
                                        <div class="shape-1">
                                            <img src="frontend/assets/images/shape/sp-shape-1.png" alt="">
                                        </div>
                                    </div>
                                    <div class="speaker-content">
                                        <h4 class="speaker-name"><a href="speaker-single.html">Dr Kazi Anis Ahmed</a></h4>
                                        <p class="speaker-designation">General Secretary, APUB</p>
                                    </div>
                                </div>
                            </div> -->
                            <div class="col-lg-4 col-sm-6">
                                <div class="single-speaker-2 color-2 text-center">
                                    <div class="shape-2">
                                        <img src="frontend/assets/images/shape/sp-shape-2.png" alt="">
                                    </div>
                                    <div class="speaker-image">
                                        <div class="image">
                                            <a href="speaker-single.html"><img src="frontend/assets/images/speaker/kabir.png" alt="Speaker"></a>
                                        </div>
                                        <div class="shape-1">
                                            <img src="frontend/assets/images/shape/sp-shape-1.png" alt="">
                                        </div>
                                    </div>
                                    <div class="speaker-content">
                                        <h4 class="speaker-name"><a href="speaker-single.html">Sheikh Kabir Hossain</a></h4>
                                        <p class="speaker-designation">Chairman of the Association of Private Universities of Bangladesh (APUB)</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="single-speaker-2 color-6 text-center">
                                    <div class="shape-2">
                                        <img src="frontend/assets/images/shape/sp-shape-2.png" alt="">
                                    </div>
                                    <div class="speaker-image">
                                        <div class="image">
                                            <a href="#"><img src="frontend/assets/images/speaker/mubin.jpg" alt="Speaker"></a>
                                        </div>
                                        <div class="shape-1">
                                            <img src="frontend/assets/images/shape/sp-shape-1.png" alt="">
                                        </div>
                                    </div>
                                    <div class="speaker-content">
                                        <h4 class="speaker-name"><a href="speaker-single.html">MA Mubin Khan</a></h4>
                                        <p class="speaker-designation">President of Bangladesh Private Medical Colleges Association (BPMCA)</p>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="col-lg-4 col-sm-6">
                                <div class="single-speaker-2 color-6 text-center">
                                    <div class="shape-2">
                                        <img src="frontend/assets/images/shape/sp-shape-2.png" alt="">
                                    </div>
                                    <div class="speaker-image">
                                        <div class="image">
                                            <a href="#"><img src="frontend/assets/images/speaker/Md. Sabur Khan.jpg" alt="Speaker"></a>
                                        </div>
                                        <div class="shape-1">
                                            <img src="frontend/assets/images/shape/sp-shape-1.png" alt="">
                                        </div>
                                    </div>
                                    <div class="speaker-content">
                                        <h4 class="speaker-name"><a href="speaker-single.html">Md. Sabur Khan</a></h4>
                                        <p class="speaker-designation">President, AUAP & <br> Founder and Chairman, Daffodil International University</p>
                                    </div>
                                </div>
                            </div> -->
                            <!-- <div class="col-lg-4 col-sm-6">
                                <div class="single-speaker-2 color-3 text-center">
                                    <div class="shape-2">
                                        <img src="frontend/assets/images/shape/sp-shape-2.png" alt="">
                                    </div>
                                    <div class="speaker-image">
                                        <div class="image">
                                            <a href="speaker-single.html"><img src="frontend/assets/images/speaker/Mr. Ishtiaqu Abedin.jpg" alt="Speaker"></a>
                                        </div>
                                        <div class="shape-1">
                                            <img src="frontend/assets/images/shape/sp-shape-1.png" alt="">
                                        </div>
                                    </div>
                                    <div class="speaker-content">
                                        <h4 class="speaker-name"><a href="speaker-single.html">Mr Ishtiaqu Abedin</a></h4>
                                        <p class="speaker-designation">Chairman <br> American International University - Bangladesh</p>
                                    </div>
                                </div>
                            </div>
                             -->
                            <!--<div class="col-lg-4 col-sm-6">-->
                            <!--    <div class="single-speaker-2 color-6 text-center">-->
                            <!--        <div class="shape-2">-->
                            <!--            <img src="frontend/assets/images/shape/sp-shape-2.png" alt="">-->
                            <!--        </div>-->
                            <!--        <div class="speaker-image">-->
                            <!--            <div class="image">-->
                            <!--                <a href="#"><img src="frontend/assets/images/speaker/" alt="Speaker"></a>-->
                            <!--            </div>-->
                            <!--            <div class="shape-1">-->
                            <!--                <img src="frontend/assets/images/shape/sp-shape-1.png" alt="">-->
                            <!--            </div>-->
                            <!--        </div>-->
                            <!--        <div class="speaker-content">-->
                            <!--            <h4 class="speaker-name"><a href="speaker-single.html"></a></h4>-->
                            <!--            <p class="speaker-designation">Graphic Designer</p>-->
                            <!--        </div>-->
                            <!--    </div>-->
                            <!--</div>-->
                            
                        </div>
                        <div class="header-btn" data-aos-delay="500" data-aos="fade-up" style="text-align: right; margin-top:15px;">
                            <a class="btn-2" href="speaker.html">Sea More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Speakers End -->
    </div>



@endsection
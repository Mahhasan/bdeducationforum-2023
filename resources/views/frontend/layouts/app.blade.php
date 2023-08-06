@extends('frontend.layouts.app')

@section('content')
        <div class="meeta-hero-section-6" style="background-image: url(/frontend/assets/images/pic-5.jpg);">
        </div>
        
        <div class="clearfix"></div>
        <div class="row d-lg-none">
            <div class="col-7 col-md-6" data-aos-delay="500" data-aos="fade-up" style="padding: 0px;">
                <a class="btn-2" href="/frontend/assets/brochure/brochure.pdf" target="_blank">Download Brochure</a>
            </div>
            <div class="col-5 col-md-6" data-aos-delay="500" data-aos="fade-up" style="padding: 0px;">
                <a href="" class="btn-2" style="float: right;" data-toggle="modal" data-target="#exampleModalCenter">Register Here</a>
            </div>
        </div>
        <div class="clearfix"></div>
        
        <!-- Slider Section End -->
        <!-- Register & Countdown Section Start -->
        <div class="meeta-about-section">
            <div class="meeta-register-countdown-wrapper">
                <div class="row gy-5 align-items-center">
                    <div class="col-lg-12">
                        <!-- Countdown Start -->
                        <div class="meeta-countdown countdown" data-countdown="2023/10/14" data-format="short">
                            <div class="single-countdown">
                                <span class="count countdown__time daysLeft"></span>
                                <span class="value countdown__time daysText"></span>
                            </div>
                            <div class="single-countdown">
                                <span class="count countdown__time hoursLeft"></span>
                                <span class="value countdown__time hoursText"></span>
                            </div>
                            <div class="single-countdown">
                                <span class="count countdown__time minsLeft"></span>
                                <span class="value countdown__time minsText"></span>
                            </div>
                            <div class="single-countdown">
                                <span class="count countdown__time secsLeft"></span>
                                <span class="value countdown__time secsText"></span>
                            </div>
                        </div>
                        <!-- Countdown End -->
                    </div>
                </div>
                <!-- Register & Countdown Wrapper End -->
            </div>
        </div>

        
        <!-- About Section Start -->
        <div class="meeta-about-section-3 section-padding">
            <div class="container">

                <div class="row align-items-center">
                    <div class="col-lg-6">

                        <!-- About Images Start -->
                        <div class="about-images-3-wrap">
                            <div class="shape-1">
                                <img src="/frontend/assets/images/shape/ab-shape-1.png" alt="">
                            </div>

                            <div class="about-img-big">
                                <img src="/frontend/assets/images/about-3.jpg" alt="">
                                <div class="shape-2">
                                    <img src="/frontend/assets/images/shape/ab-shape-2.png" alt="">
                                </div>
                            </div>
                            <div class="about-img-small">
                                <div class="image-1">
                                    <img src="/frontend/assets/images/about-4.jpg" alt="">
                                </div>
                                <div class="image-2">
                                    <img src="/frontend/assets/images/about-5.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <!-- About Images End -->

                    </div>
                    <div class="col-lg-6">
                        <div class="about-content-3-wrap">
                            <!-- Section Title Start -->
                            <div class="meeta-section-title-2">
                                <h4 class="sub-title">About Event</h4>
                                <h2 class="main-title">Bangladesh Education<br> Forum 2023</h2>
                            </div>
                            <!-- Section Title End -->

                            <!-- About Content Start -->
                            <div class="about-content-3 about-content-3" style="text-align: justify;">
                                <p>Bangladesh Education Forum 2023 exhibition-cum-conference will highlight the 
                                    strength of the educational institutions in Bangladesh and their ability to 
                                    offer good-quality affordable education to international students. Currently, 
                                    3.2 million students are enrolled in tertiary-level education. The total tertiary 
                                    enrolment may exceed 4.6 million by 2026, according to an estimate made by the 
                                    University Grants Commission (UGC) of Bangladesh, the higher education supervision 
                                    and regulatory body.
                                    <br><br>
                                    Bangladesh has 55 well-established public universities, fully funded by the 
                                    government, while managed as self-governed organizations. Studying in 
                                    Bangladesh enables international students to obtain better-paid job 
                                    opportunities anywhere in the world.</p><br>

                                <a class="btn-2" href="/about-event">See More</a>                               
                            </div>
                            <!-- About Content End -->
                        </div>

                    </div>
                </div>

            </div>
        </div>
        <!-- About Section End -->

         <!-- Features Section Start -->
         <div class="meeta-features-section section-padding-02">
            <div class="shape-1" data-aos-delay="700" data-aos="zoom-in"></div>
            <div class="container">
                <div class="meeta-features-wrap">
                    <div class="row">
                        <div class="col-lg-6">
                            <!-- Features Item Start -->
                            <div class="feature-item feature-3">
                                <div class="feature-content">
                                    <h3 class="title"><a>Objectives of Bangladesh Education Forum</a></h3>
                                    <p style="font-size: 17px; text-align: justify;">
                                        Bangladesh Education Forum 2023 aims to bring interested Bangladeshi universities, 
                                        and engineering and medical colleges closer to the international high-school 
                                        students in the UAE and GCC who would be looking to enrol for universities in 
                                        different countries, in 2024 and beyond through their participation at the 
                                        exhibition and conference.
                                        </p>
                                </div>
                            </div>
                            <!-- Features Item End -->
                        </div>
                        <div class="col-lg-6">
                            <div class="feature-item feature-3" style="margin-bottom: 30px;">
                                <div class="feature-content">
                                    <h3 class="title"><a>Bangladesh Higher Education Snapshot</a></h3>
                                    <p style="font-size: 17px; text-align: justify;">
                                        30 million students.<br>
                                        4.6 million students in Universities and Colleges.<br>
                                        163 Universities including 55 Public Universities.<br>
                                        108 Private Universities.<br>
                                        115 Medical Colleges.<br>
                                        60% Cost-Competitive Compared to India.<br>
                                        US$40,000 Average Cost of MBBS Degree.<br>
                                        Good Accommodation for Foreign Students
                                    </p>
                                    <a class="btn-2" href="/about-event">See More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Features Section End -->

        <!-- Counter Start -->
        <div class="meeta-counter-section section-padding" style="background-image: url(/frontend/assets/images/bg/counter-bg.jpg);">
            <div class="shape-1">
                <img src="/frontend/assets/images/shape/counter-shape-1.png" alt="">
            </div>
            <div class="shape-2">
                <img src="/frontend/assets/images/shape/counter-shape-2.png" alt="">
            </div>
            <div class="shape-3">
                <img src="/frontend/assets/images/shape/hero-sahpe-1.png" alt="">
            </div>
            <div class="shape-4">
                <img src="/frontend/assets/images/shape/counter-shape-4.png" alt="">
            </div>
            <div class="container">
                <div class="counter-wrap">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6">
                            <!-- Single Counter Start -->
                            <div class="single-counter counter-item-1 text-center">
                                <div class="counter-text">
                                    <span class="counter">30</span>
                                    <p>Universities & Colleges</p>
                                </div>
                            </div>
                            <!-- Single Counter End -->
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <!-- Single Counter Start -->
                            <div class="single-counter counter-item-2 text-center">
                                <div class="counter-text">
                                    <span class="counter">3000</span>
                                    <p>Attendence</p>
                                </div>
                            </div>
                            <!-- Single Counter End -->
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <!-- Single Counter Start -->
                            <div class="single-counter counter-item-3 text-center">
                                <div class="counter-text">
                                    <span class="counter">05</span>
                                    <p>Seminer</p>
                                </div>
                            </div>
                            <!-- Single Counter End -->
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <!-- Single Counter Start -->
                            <div class="single-counter text-center">
                                <div class="counter-text">
                                    <span class="counter">20</span>
                                    <p>Speakers</p>
                                </div>
                            </div>
                            <!-- Single Counter End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Counter End -->

        <!-- Special Speakers Start -->
        <div class="meeta-speakers section-padding">
            <div class="container">
                <!-- Section Title Start -->
                <div class="meeta-section-title text-center">
                    <!-- <h4 class="sub-title">Speakers</h4> -->
                    <h2 class="main-title">Cheif Guest <span style="font-size: 18px;">(Proposed)</span></h2>
                </div>
                <!-- Section Title End -->

                <div class="row gy-5 meeta-speakers-row">
                    <!--<div class="col-lg-6 col-sm-6 " style="margin: 0 auto;">-->
                    <!--    <div class="single-speaker">-->
                    <!--        <div class="speaker-image">-->
                    <!--            <a href=""><img src="/frontend/assets/images/speaker/dipu-moni.png" alt="Speaker"></a>-->
                    <!--        </div>-->
                    <!--        <div class="speaker-content">-->
                    <!--            <div class="speaker-content-box">-->
                    <!--                <h4 class="speaker-name"><a href="">Dr. Dipu Moni, MP</a></h4>-->
                    <!--                <p class="speaker-designation pt-3">Honorable Minister, <br>Ministry of Educatiuon<br>Government of Bangladesh</p>-->
                    <!--            </div>-->
                    <!--            <img class="speaker-shape-1" src="/frontend/assets/images/shape/shape-8.png" alt="">-->
                                
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->
                    
                    <div class="col-lg-6 col-sm-6 " style="margin: 0 auto;">
                        <!-- Single Speakers Start -->
                        <div class="single-speaker">
                            <div class="speaker-image">
                                <a href=""><img src="/frontend/assets/images/speaker/mohibul.png" alt="Speaker"></a>
                            </div>
                            <div class="speaker-content">
                                <div class="speaker-content-box">
                                    <h4 class="speaker-name"><a href="">HE Mohibul Hassan Chowdhury</a></h4>
                                    <p class="speaker-designation pt-3">Deputy Minister, <br>Ministry of Education<br>Government of Bangladesh</p>
                                </div>
                                <img class="speaker-shape-1" src="/frontend/assets/images/shape/shape-8.png" alt="">
                            </div>
                        </div>
                        <!-- Single Speakers End -->
                    </div>
                </div>

            </div>
        </div>
        <!-- Speakers End -->

        <!-- Speakers Start -->
         <div class="meeta-speakers-2 section-padding">
            <div class="container">
                <div class="meeta-speakers-wrap">
                    <div class="meeta-section-title-2 text-center">
                        <h4 class="sub-title">Speakers</h4>
                        <h2 class="main-title text-white">Special Guest <span style="font-size: 18px;">(Proposed)</span></h2>
                    </div>
                    <div class="meeta-speakers-content-wrap-2">
                        <div class="row">

                            <!-- <div class="col-lg-4 col-sm-6">
                                <div class="single-speaker-2 color-1 text-center">
                                    <div class="shape-2">
                                        <img src="/frontend/assets/images/shape/sp-shape-2.png" alt="">
                                    </div>
                                    <div class="speaker-image">
                                        <div class="image">
                                            <a href="speaker-single.html"><img src="/frontend/assets/images/speaker/Abu_Zafar.jpg" alt="Speaker"></a>
                                        </div>
                                        <div class="shape-1">
                                            <img src="/frontend/assets/images/shape/sp-shape-1.png" alt="">
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
                                        <img src="/frontend/assets/images/shape/sp-shape-2.png" alt="">
                                    </div>
                                    <div class="speaker-image">
                                        <div class="image">
                                            <a href="speaker-single.html"><img src="/frontend/assets/images/speaker/Professor Dr. Biswajit Chanda.jpg" alt="Speaker"></a>
                                        </div>
                                        <div class="shape-1">
                                            <img src="/frontend/assets/images/shape/sp-shape-1.png" alt="">
                                        </div>
                                    </div>
                                    <div class="speaker-content">
                                        <h4 class="speaker-name"><a href="speaker-single.html">Professor Dr. Biswajit Chanda</a></h4>
                                        <p class="speaker-designation">Member, University Grants Commission of Bangladesh</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="single-speaker-2 color-2 text-center">
                                    <div class="shape-2">
                                        <img src="/frontend/assets/images/shape/sp-shape-2.png" alt="">
                                    </div>
                                    <div class="speaker-image">
                                        <div class="image">
                                            <a href="speaker-single.html"><img src="/frontend/assets/images/speaker/Kazi_Anis_Ahmed.jpg" alt="Speaker"></a>
                                        </div>
                                        <div class="shape-1">
                                            <img src="/frontend/assets/images/shape/sp-shape-1.png" alt="">
                                        </div>
                                    </div>
                                    <div class="speaker-content">
                                        <h4 class="speaker-name"><a href="speaker-single.html">Dr Kazi Anis Ahmed</a></h4>
                                        <p class="speaker-designation">General Secretary, APUB</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="single-speaker-2 color-6 text-center">
                                    <div class="shape-2">
                                        <img src="/frontend/assets/images/shape/sp-shape-2.png" alt="">
                                    </div>
                                    <div class="speaker-image">
                                        <div class="image">
                                            <a href="#"><img src="/frontend/assets/images/speaker/Md. Sabur Khan.jpg" alt="Speaker"></a>
                                        </div>
                                        <div class="shape-1">
                                            <img src="/frontend/assets/images/shape/sp-shape-1.png" alt="">
                                        </div>
                                    </div>
                                    <div class="speaker-content">
                                        <h4 class="speaker-name"><a href="speaker-single.html">Md. Sabur Khan</a></h4>
                                        <p class="speaker-designation">First Vice President, AUAP & <br> Founder and Chairman, Daffodil International University</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="single-speaker-2 color-3 text-center">
                                    <div class="shape-2">
                                        <img src="/frontend/assets/images/shape/sp-shape-2.png" alt="">
                                    </div>
                                    <div class="speaker-image">
                                        <div class="image">
                                            <a href="speaker-single.html"><img src="/frontend/assets/images/speaker/Mr. Ishtiaqu Abedin.jpg" alt="Speaker"></a>
                                        </div>
                                        <div class="shape-1">
                                            <img src="/frontend/assets/images/shape/sp-shape-1.png" alt="">
                                        </div>
                                    </div>
                                    <div class="speaker-content">
                                        <h4 class="speaker-name"><a href="speaker-single.html">Mr Ishtiaqu Abedin</a></h4>
                                        <p class="speaker-designation">Chairman <br> American International University - Bangladesh</p>
                                    </div>
                                </div>
                            </div>
                            
                            <!--<div class="col-lg-4 col-sm-6">-->
                            <!--    <div class="single-speaker-2 color-6 text-center">-->
                            <!--        <div class="shape-2">-->
                            <!--            <img src="/frontend/assets/images/shape/sp-shape-2.png" alt="">-->
                            <!--        </div>-->
                            <!--        <div class="speaker-image">-->
                            <!--            <div class="image">-->
                            <!--                <a href="#"><img src="/frontend/assets/images/speaker/" alt="Speaker"></a>-->
                            <!--            </div>-->
                            <!--            <div class="shape-1">-->
                            <!--                <img src="/frontend/assets/images/shape/sp-shape-1.png" alt="">-->
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
                            <a class="btn-2" href="/speaker">See More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Speakers End -->

        <!-- Event deatails Start -->
        <div class="meeta-event-sponsors-3 section-padding" style=" background-color: transparent;
        background-image: linear-gradient(90deg, #822ea8 0%, #0444C9 100%);
        opacity: 0.8;
        transition: background 0.3s, border-radius 0.3s, opacity 0.3s;">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <!-- Section Title Start -->
                        <div class="meeta-section-title-2 section-title-3 text-initial">
                            <h2 class="main-title" style=" color: #fff;  font-size: 31px;">Bangladesh Education Forum 2023 Event Details</h2>
                        </div>
                        <!-- Section Title End -->
                        <table class="table table-borderless" style=" color: #fff;">
                            <thead>
                              <tr>
                                <th scope="col">Event</th>
                                <th scope="col">An exhibition and conference to enrol students in Bangladeshi universities </th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th scope="row">Date</th>
                                <td>October 14-15, 2023</td>
                              </tr>
                              <tr>
                                <th scope="row">Days</th>
                                <td>Saturday, Sunday</td>
                              </tr>
                              <tr>
                                <th scope="row">Registration </th>
                                <td>8:00 am</td>
                              </tr>
                              <tr>
                                <th scope="row">Conference</th>
                                <td>9:00 am – 5:00 pm</td>
                              </tr>
                              <tr>
                                <th scope="row">Exhibition </th>
                                <td>10:00 am - 5:00 pm</td>
                              </tr>
                              <tr>
                                <th scope="row">Place </th>
                                <td>Crowne Plaza Deira-Dubai, Salah Al Din Road, Muraqqabat Road, Dubai, UAE</td>
                              </tr>
                              <tr>
                                <th scope="row">Participants</th>
                                <td>Students, Student Counsellors, Education Consultants, etc</td>
                              </tr>
                              <tr>
                                <th scope="row">Speakers</th>
                                <td>20 Top Education Experts and High Officials</td>
                              </tr>
                              <tr>
                                <th scope="row">Exhibitors</th>
                                <td>50+ Bangladeshi Universities and Colleges</td>
                              </tr>
                              <tr>
                                <th scope="row">Students</th>
                                <td>1,200 UAE-based students, looking for university enrollment</td>
                              </tr>
                              <tr>
                                <th scope="row">Attendees</th>
                                <td>400+ Educationists and Delegates</td>
                              </tr>
                              <tr>
                                <th scope="row">Meetings</th>
                                <td>With Students Counsellors, Consultants, Parents & Students</td>
                              </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-4">
                        <!-- Section Title Start -->
                        <div class="meeta-section-title-2 section-title-3 text-initial">
                            <h2 class="main-title" style=" color: #fff;  font-size: 31px;">Opening Reception</h2>
                        </div>
                        <!-- Section Title End -->
                        <table class="table table-borderless" style=" color: #fff;">
                            <tbody>
                                <tr>
                                    <th scope="row">Time</th>
                                    <td>5:00 pm till 10:00 pm</td>
                                </tr>
                                <tr>
                                    <th scope="row">Date</th>
                                    <td>Saturday, OCT. 14, 2023 </td>
                                </tr>
                                <tr>
                                    <th scope="row">Place</th>
                                    <td>Crowne Plaza Deira, Salah Al-Din, Dubai</td>
                                </tr>
                            </tbody>
                        </table>
                        
                        <!-- Section Title Start -->
                        <div class="meeta-section-title-2 section-title-3 text-initial">
                            <h2 class="main-title" style=" color: #fff;  font-size: 31px;">Programme Schedule</h2>
                        </div>
                        <!-- Section Title End -->
                        <table class="table table-borderless" style=" color: #fff;">
                            <tbody>
                              <tr>
                                <th scope="row">Registration</th>
                                <td>: 05:00 pm</td>
                              </tr>
                              <tr>
                                <th scope="row">Welcome Speech </th>
                                <td>: 06:00 pm</td>
                              </tr>
                              <tr>
                                <th scope="row">Chief Guests Speech</th>
                                <td>: 06:10 pm</td>
                              </tr>
                              <tr>
                                <th scope="row">Guest of Honour</th>
                                <td>: 06:40 pm</td>
                              </tr>
                              <tr>
                                <th scope="row">Presentation by APUB</th>
                                <td>: 07:00 pm</td>
                              </tr>
                              <tr>
                                <th scope="row">Speech by AIUB</th>
                                <td>: 07:20 pm</td>
                              </tr>
                              <tr>
                                <th scope="row">Panel Discussion</th>
                                <td>: 07:30 pm</td>
                              </tr>
                              <tr>
                                <th scope="row">Vote of Thanks</th>
                                <td>: 08:00 pm</td>
                              </tr>
                              <tr>
                                <th scope="row">Dinner</th>
                                <td>: 08:00 pm</td>
                              </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- Event Snapshot End -->

        <!-- Event Schedule Start -->
        <div class="meeta-event-schedule meeta-event-schedule-2 meeta-event-schedule-4 section-padding">
            <div class="container">

                <!-- Section Title Start -->
                <div class="meeta-section-title-2 section-title-4 text-center">
                    <!-- <h4 class="sub-title">Event Schedule</h4> -->
                    <h2 class="main-title">Event Schedule</h2>
                </div>
                <!-- Section Title End -->

                <div class="row gy-5 justify-content-between">

                    <div class="col-lg-12">

                        <!-- Event Schedule Tabs Start -->
                        <div class="meeta-event-schedule-tabs">

                            <!-- Event Schedule Tabs Menu Start -->
                            <ul class="meeta-event-schedule-tabs-menu">
                                <li data-tab-target="#tab1" class="active">
                                    <div class="meeta-event-schedule-time">
                                        <h4 class="meeta-event-schedule-day">Day 1</h4>
                                        <p>OCT 14, Saturday 2023</p>
                                    </div>
                                </li>
                                <li data-tab-target="#tab2" class="tab">
                                    <div class="meeta-event-schedule-time color-1">
                                        <h4 class="meeta-event-schedule-day">Day 2</h4>
                                        <p>OCT 15, Sunday 2023</p>
                                    </div>
                                </li>
                                <!-- <li data-tab-target="#tab3" class="tab">
                                    <div class="meeta-event-schedule-time color-2">
                                        <h4 class="meeta-event-schedule-day">Day 3</h4>
                                        <p>NOV 07, Monday 2022</p>
                                    </div>
                                </li> -->
                            </ul>
                            <!-- Event Schedule Tabs Menu End -->

                            <!-- Event Schedule Tabs Content Start -->
                            <div class="meeta-event-schedule-tab-content">
                                <div id="tab1" class="meeta-event-schedule-tab-pane active">

                                    <!-- Event Accordion Start -->
                                    <ul class="meeta-event-accordion">
                                        <!-- <h2 class="text-center">Venue: Mövenpick Grand Al Bustan Dubai, UAE</h2> -->
                                        <li class="meeta-event-accordion-item">
                                            <div class="meeta-event-accordion-toggle">
                                                <div class="image">
                                                    <img src="/frontend/assets/images/schedule-1.jpg" alt="">
                                                </div>
                                                <div class="event-title">
                                                    <span class="time">08:00 am</span>
                                                    <h3 class="title">Registration and Refreshments.</h3>
                                                </div>
                                            </div>
                                            <div class="meeta-event-accordion-body open">
                                                <p></p>
                                            </div>
                                        </li>
                                        <li class="meeta-event-accordion-item">
                                            <div class="meeta-event-accordion-toggle">
                                                <div class="image">
                                                    <img src="/frontend/assets/images/schedule-2.jpg" alt="">
                                                </div>
                                                <div class="event-title">
                                                    <span class="time">09:00 am</span>
                                                    <h3 class="title">Opening Remarks by the Organiser.</h3>
                                                </div>
                                            </div>
                                            <div class="meeta-event-accordion-body">
                                                <p></p>
                                            </div>
                                        </li>
                                        <li class="meeta-event-accordion-item" style="padding-right: 0px;">
                                            <div class="meeta-event-accordion-toggle">
                                                <div class="image">
                                                    <img src="/frontend/assets/images/schedule-3.jpg" alt="">
                                                </div>
                                                <div class="event-title">
                                                    <span class="time">09:10 am</span>
                                                    <h3 class="title">Keynote Address by the Chief Guest, HE Dr Dipu Moni,
                                                        Honourable Education Minister of Bangladesh.
                                                    </h3>
                                                </div>
                                            </div>
                                            <div class="meeta-event-accordion-body">
                                                <p></p>
                                            </div>
                                        </li>
                                        <li class="meeta-event-accordion-item" style="padding-right: 0px;">
                                            <div class="meeta-event-accordion-toggle">
                                                <div class="image">
                                                    <img src="/frontend/assets/images/schedule-3.jpg" alt="">
                                                </div>
                                                <div class="event-title">
                                                    <span class="time">09:40 am</span>
                                                    <h3 class="title">Keynote Address on Education System in Bangladesh by
                                                        Secretary, Ministry of Education, Bangladesh.
                                                    </h3>
                                                </div>
                                            </div>
                                            <div class="meeta-event-accordion-body">
                                                <p></p>
                                            </div>
                                        </li>
                                        <li class="meeta-event-accordion-item" style="padding-right: 0px;">
                                            <div class="meeta-event-accordion-toggle">
                                                <div class="image">
                                                    <img src="/frontend/assets/images/schedule-3.jpg" alt="">
                                                </div>
                                                <div class="event-title">
                                                    <span class="time">10:15 am</span>
                                                    <h3 class="title">Presentation on Foreign Enrollment in Universities in
                                                        Bangladesh by University Grants Commission, Bangladesh.
                                                    </h3>
                                                </div>
                                            </div>
                                            <div class="meeta-event-accordion-body">
                                                <p></p>
                                            </div>
                                        </li>
                                        <li class="meeta-event-accordion-item">
                                            <div class="meeta-event-accordion-toggle">
                                                <div class="image">
                                                    <img src="/frontend/assets/images/schedule-3.jpg" alt="">
                                                </div>
                                                <div class="event-title">
                                                    <span class="time">10:40 am</span>
                                                    <h3 class="title">Presentation on Foreign Enrollment in Medical Colleges in
                                                        Bangladesh by TBA.
                                                    </h3>
                                                </div>
                                            </div>
                                            <div class="meeta-event-accordion-body">
                                                <p></p>
                                            </div>
                                        </li>
                                        <li class="meeta-event-accordion-item">
                                            <div class="meeta-event-accordion-toggle">
                                                <div class="image">
                                                    <img src="/frontend/assets/images/schedule-3.jpg" alt="">
                                                </div>
                                                <div class="event-title">
                                                    <span class="time">11:00 am</span>
                                                    <h3 class="title">Coffee Break, Inauguration of Bangladesh Education Exhibition.</h3>
                                                </div>
                                            </div>
                                            <div class="meeta-event-accordion-body">
                                                <p></p>
                                            </div>
                                        </li>
                                        <li class="meeta-event-accordion-item">
                                            <div class="meeta-event-accordion-toggle">
                                                <div class="image">
                                                    <img src="/frontend/assets/images/schedule-3.jpg" alt="">
                                                </div>
                                                <div class="event-title">
                                                    <span class="time">11:30 am</span>
                                                    <h3 class="title">Panel Discussion on Cost-Competitiveness and Quality of Higher 
                                                        Education in Bangladesh.</h3>
                                                </div>
                                            </div>
                                            <div class="meeta-event-accordion-body">
                                                <p></p>
                                            </div>
                                        </li>
                                    </ul><hr>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                            <th scope="col">AnchorTBA</th>
                                            <th scope="col"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                            <th scope="row">Panelist 1</th>
                                            <td>Dr. M. Sabur Khan, President of Daffodil International University</td>
                                            </tr>
                                            <tr>
                                            <th scope="row">Panelist 2</th>
                                            <td>Representative from UGC, Bangladesh</td>
                                            </tr>
                                            <tr>
                                            <th scope="row">Panelist 3</th>
                                            <td>Representatives from Private Universities in Bangladesh</td>
                                            </tr>
                                            <tr>
                                            <th scope="row">Panelist 4</th>
                                            <td>Representatives from Medical Colleges in Bangladesh</td>
                                            </tr>
                                            <tr>
                                            <th scope="row">Panelist 5</th>
                                            <td>Higher Education Consultants</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <ul class="meeta-event-accordion">
                                        <li class="meeta-event-accordion-item">
                                            <div class="meeta-event-accordion-toggle">
                                                <div class="image">
                                                    <img src="/frontend/assets/images/schedule-3.jpg" alt="">
                                                </div>
                                                <div class="event-title">
                                                    <span class="time">12:15 pm</span>
                                                    <h3 class="title">Panel Discussion on Scholarship, Research Grants and International Ranking
                                                        of Universities in Bangladesh.</h3>
                                                </div>
                                            </div>
                                            <div class="meeta-event-accordion-body">
                                                <p></p>
                                            </div>
                                        </li>
                                    </ul><hr>
                                    <!-- Event Accordion End -->

                                    <table class="table">
                                        <thead>
                                          <tr>
                                            <th scope="col">Anchor</th>
                                            <th scope="col">Ujjawal Anu Chowdhury, International Education Advisor</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <th scope="row">Panelist 1</th>
                                            <td>Representative from UGC, Bangladesh</td>
                                          </tr>
                                          <tr>
                                            <th scope="row">Panelist 2</th>
                                            <td>Representatives from Private Universities in Bangladesh</td>
                                          </tr>
                                          <tr>
                                            <th scope="row">Panelist 3</th>
                                            <td>Representatives from Medical Colleges in Bangladesh</td>
                                          </tr>
                                          <tr>
                                            <th scope="row">Panelist 4</th>
                                            <td>Higher Education Consultants (UAE/GCC)</td>
                                          </tr>
                                          <tr>
                                            <th scope="row">Panelist 5</th>
                                            <td>Higher Education Consultants (Bangladesh)</td>
                                          </tr>
                                        </tbody>
                                      </table>
                                </div>

                                <div id="tab2" class="meeta-event-schedule-tab-pane">

                                    <!-- Event Accordion Start -->
                                    <ul class="meeta-event-accordion">
                                        <!-- <h2 class="text-center">Venue: Mövenpick Grand Al Bustan Dubai, UAE</h2> -->
                                        <li class="meeta-event-accordion-item">
                                            <div class="meeta-event-accordion-toggle">
                                                <div class="image">
                                                    <img src="/frontend/assets/images/schedule-1.jpg" alt="">
                                                </div>
                                                <div class="event-title">
                                                    <span class="time">08:00 am</span>
                                                    <h3 class="title">Registration and Refreshments</h3>
                                                </div>
                                            </div>
                                            <div class="meeta-event-accordion-body open">
                                                <p></p>
                                            </div>
                                        </li>

                                        <li class="meeta-event-accordion-item">
                                            <div class="meeta-event-accordion-toggle">
                                                <div class="image">
                                                    <img src="/frontend/assets/images/schedule-2.jpg" alt="">
                                                </div>
                                                <div class="event-title">
                                                    <span class="time">09:00 am</span>
                                                    <h3 class="title">Education Exhibition Opens</h3>
                                                </div>
                                            </div>
                                            <div class="meeta-event-accordion-body">
                                                <p>Keynote Address by Education Expert, 
                                                    Ministry of Education, Bangladesh</p>
                                            </div>
                                        </li>

                                        <li class="meeta-event-accordion-item">
                                            <div class="meeta-event-accordion-toggle">
                                                <div class="image">
                                                    <img src="/frontend/assets/images/schedule-3.jpg" alt="">
                                                </div>
                                                <div class="event-title">
                                                    <span class="time">09:30 am</span>
                                                    <h3 class="title">Presentation 1 by a Bangladeshi University TBA</h3>
                                                </div>
                                            </div>
                                            <div class="meeta-event-accordion-body">
                                                <p></p>
                                            </div>
                                        </li>
                                        <li class="meeta-event-accordion-item">
                                            <div class="meeta-event-accordion-toggle">
                                                <div class="image">
                                                    <img src="/frontend/assets/images/schedule-3.jpg" alt="">
                                                </div>
                                                <div class="event-title">
                                                    <span class="time">09:45 am</span>
                                                    <h3 class="title">Presentation 2 by a Bangladeshi University TBA.</h3>
                                                </div>
                                            </div>
                                            <div class="meeta-event-accordion-body">
                                                <p></p>
                                            </div>
                                        </li>
                                        <li class="meeta-event-accordion-item">
                                            <div class="meeta-event-accordion-toggle">
                                                <div class="image">
                                                    <img src="/frontend/assets/images/schedule-3.jpg" alt="">
                                                </div>
                                                <div class="event-title">
                                                    <span class="time">10:00 am</span>
                                                    <h3 class="title">Presentation 3 by a Bangladeshi University TBA.</h3>
                                                </div>
                                            </div>
                                            <div class="meeta-event-accordion-body">
                                                <p></p>
                                            </div>
                                        </li>
                                        <li class="meeta-event-accordion-item">
                                            <div class="meeta-event-accordion-toggle">
                                                <div class="image">
                                                    <img src="/frontend/assets/images/schedule-3.jpg" alt="">
                                                </div>
                                                <div class="event-title">
                                                    <span class="time">10:15 am</span>
                                                    <h3 class="title">Panel Discussion on Problems and Prospects of 
                                                        Higher Education in Bangladesh.
                                                    </h3>
                                                </div>
                                            </div>
                                            <div class="meeta-event-accordion-body">
                                                <p></p>
                                            </div>
                                        </li>
                                    </ul><hr>
                                    <table class="table">
                                        <thead>
                                          <tr>
                                            <th scope="col">AnchorTBA</th>
                                            <th scope="col"></th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <th scope="row">Panelist 1</th>
                                            <td>Representative from UGC, Bangladesh</td>
                                          </tr>
                                          <tr>
                                            <th scope="row">Panelist 2</th>
                                            <td>Representatives from Private Universities in Bangladesh</td>
                                          </tr>
                                          <tr>
                                            <th scope="row">Panelist 3</th>
                                            <td>Representatives from Medical Colleges in Bangladesh</td>
                                          </tr>
                                          <tr>
                                            <th scope="row">Panelist 4</th>
                                            <td>Higher Education Consultants</td>
                                          </tr>
                                        </tbody>
                                      </table>
                                    <ul class="meeta-event-accordion">
                                        <li class="meeta-event-accordion-item">
                                            <div class="meeta-event-accordion-toggle">
                                                <div class="image">
                                                    <img src="/frontend/assets/images/schedule-3.jpg" alt="">
                                                </div>
                                                <div class="event-title">
                                                    <span class="time">11:00 am</span>
                                                    <h3 class="title">Coffee Break.</h3>
                                                </div>
                                            </div>
                                            <div class="meeta-event-accordion-body">
                                                <p></p>
                                            </div>
                                        </li>
                                        <li class="meeta-event-accordion-item">
                                            <div class="meeta-event-accordion-toggle">
                                                <div class="image">
                                                    <img src="/frontend/assets/images/schedule-3.jpg" alt="">
                                                </div>
                                                <div class="event-title">
                                                    <span class="time">11:30 am</span>
                                                    <h3 class="title">Presentation 4 by Daffodil International University.</h3>
                                                </div>
                                            </div>
                                            <div class="meeta-event-accordion-body">
                                                <p></p>
                                            </div>
                                        </li>
                                        <li class="meeta-event-accordion-item">
                                            <div class="meeta-event-accordion-toggle">
                                                <div class="image">
                                                    <img src="/frontend/assets/images/schedule-3.jpg" alt="">
                                                </div>
                                                <div class="event-title">
                                                    <span class="time">11:45 am</span>
                                                    <h3 class="title">Presentation 5 by a Bangladeshi University TBA.</h3>
                                                </div>
                                            </div>
                                            <div class="meeta-event-accordion-body">
                                                <p></p>
                                            </div>
                                        </li>
                                        <li class="meeta-event-accordion-item">
                                            <div class="meeta-event-accordion-toggle">
                                                <div class="image">
                                                    <img src="/frontend/assets/images/schedule-3.jpg" alt="">
                                                </div>
                                                <div class="event-title">
                                                    <span class="time">12:00 pm</span>
                                                    <h3 class="title">Presentation 6 by a Bangladeshi University TBA.</h3>
                                                </div>
                                            </div>
                                            <div class="meeta-event-accordion-body">
                                                <p></p>
                                            </div>
                                        </li>
                                        <li class="meeta-event-accordion-item">
                                            <div class="meeta-event-accordion-toggle">
                                                <div class="image">
                                                    <img src="/frontend/assets/images/schedule-3.jpg" alt="">
                                                </div>
                                                <div class="event-title">
                                                    <span class="time">12:15 pm</span>
                                                    <h3 class="title">Panel Discussion on Why Bangladesh is in a strong position to offer good-quality
                                                        higher education at a fraction of a cost compared to other international education
                                                        hubs.</h3>
                                                </div>
                                            </div>
                                            <div class="meeta-event-accordion-body">
                                                <p></p>
                                            </div>
                                        </li>
                                    </ul>
                                    <hr>
                                    <!-- Event Accordion End -->
                                    <table class="table">
                                        <thead>
                                          <tr>
                                            <th scope="col">AnchorTBA</th>
                                            <th scope="col"></th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <th scope="row">Panelist 1</th>
                                            <td>Representatives from Private Universities in Bangladesh</td>
                                          </tr>
                                          <tr>
                                            <th scope="row">Panelist 2</th>
                                            <td>Representatives from Medical Colleges in Bangladesh</td>
                                          </tr>
                                          <tr>
                                            <th scope="row">Panelist 3</th>
                                            <td>Higher Education Consultants (UAE/GCC)</td>
                                          </tr>
                                          <tr>
                                            <th scope="row">Panelist 4</th>
                                            <td>Higher Education Consultants (Bangladesh)</td>
                                          </tr>
                                        </tbody>
                                    </table>

                                </div>
                                <div id="tab3" class="meeta-event-schedule-tab-pane">

                                    <!-- Event Accordion Start -->
                                    <ul class="meeta-event-accordion">

                                        <li class="meeta-event-accordion-item">
                                            <div class="meeta-event-accordion-toggle">
                                                <div class="image">
                                                    <img src="/frontend/assets/images/schedule-2.jpg" alt="">
                                                </div>
                                                <div class="event-title">
                                                    <span class="time">11 AM - 01 AM</span>
                                                    <h3 class="title">Introduction about speakers </h3>
                                                </div>
                                            </div>
                                            <div class="meeta-event-accordion-body">
                                                <p></p>
                                            </div>
                                        </li>

                                        <li class="meeta-event-accordion-item">
                                            <div class="meeta-event-accordion-toggle">
                                                <div class="image">
                                                    <img src="/frontend/assets/images/schedule-1.jpg" alt="">
                                                </div>
                                                <div class="event-title">
                                                    <span class="time">09 AM - 11 AM</span>
                                                    <h3 class="title">Registration for opening workshop </h3>
                                                </div>
                                            </div>
                                            <div class="meeta-event-accordion-body open">
                                                <p></p>
                                            </div>
                                        </li>

                                        <li class="meeta-event-accordion-item">
                                            <div class="meeta-event-accordion-toggle">
                                                <div class="image">
                                                    <img src="/frontend/assets/images/schedule-3.jpg" alt="">
                                                </div>
                                                <div class="event-title">
                                                    <span class="time">01 AM - 02 AM</span>
                                                    <h3 class="title">Lunch Break </h3>
                                                </div>
                                            </div>
                                            <div class="meeta-event-accordion-body">
                                                <p></p>
                                            </div>
                                        </li>

                                    </ul>
                                    <!-- Event Accordion End -->

                                </div>
                            </div>
                            <!-- Event Schedule Tabs Content End -->

                        </div>
                        <!-- Event Schedule Tabs End -->

                    </div>
                </div>
            </div>
        </div>
        <!-- Event Schedule End -->

        <!-- Pricing Start -->
        <!-- <div class="meeta-pricing meeta-pricing-2 section-padding">
            <div class="shape-1">
                <img src="/frontend/assets/images/shape/price-2-bg.png" alt="">
            </div>
            <div class="container">
                <div class="meeta-section-title-2 text-center">
                    <h4 class="sub-title">Ticket Price</h4>
                    <h2 class="main-title text-white">Get Your Tickets Now</h2>
                </div>
                <div class="row gy-5 justify-content-center meeta-pricing-row">
                    <div class="col-lg-4 col-md-8">
                        <div class="single-pricing">
                            <div class="pricing-header">
                                <h3 class="price_title">Basic Pass</h3>
                                <div class="price">
                                    <span><sup>$</sup>45</span>
                                </div>
                            </div>
                            <div class="pricing-body">
                                <ul>
                                    <li>Back Row Seat</li>
                                    <li>Free Lunch & Snacks</li>
                                    <li>Event Certificate</li>
                                    <li>1 Workshop</li>
                                </ul>
                                <a class="btn " href="#">Book A Seat</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-8">
                        <div class="single-pricing active">
                            <div class="pricing-header">
                                <h3 class="price_title">Standard Pass</h3>
                                <div class="price">
                                    <span><sup>$</sup>65</span>
                                </div>
                            </div>
                            <div class="pricing-body">
                                <ul>
                                    <li>Back Row Seat</li>
                                    <li>Free Lunch & Snacks</li>
                                    <li>Event Certificate</li>
                                    <li>1 Workshop</li>
                                </ul>
                                <a class="btn " href="#">Book A Seat</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-8">
                        <div class="single-pricing">
                            <div class="pricing-header">
                                <h3 class="price_title">Premium Pass</h3>
                                <div class="price">
                                    <span><sup>$</sup>85</span>
                                </div>
                            </div>
                            <div class="pricing-body">
                                <ul>
                                    <li>Back Row Seat</li>
                                    <li>Free Lunch & Snacks</li>
                                    <li>Event Certificate</li>
                                    <li>1 Workshop</li>
                                </ul>
                                <a class="btn " href="#">Book A Seat</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Pricing End -->
        
        
        <!-- Event Participant Start -->
        <!--<div class="meeta-event-sponsors section-padding" style="background-image: url(/frontend/assets/images/event-bg-1.jpg);">-->
        <!--    <div class="container">-->
        <!--        <div class="meeta-section-title text-center">-->
        <!--            <h2 class="main-title text-white">Participants Institute</h2>-->
        <!--        </div>-->
        <!--        <div class="meeta-sponsor-active">-->
        <!--            <div class="swiper">-->
        <!--                <div class="swiper-wrapper">-->
        <!--                    <div class="swiper-slide">-->
        <!--                        <div class="meeta-sponsor-logo">-->
        <!--                            <img src="/frontend/assets/images/aiub.png" alt="">-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                    <div class="swiper-slide">-->
        <!--                        <div class="meeta-sponsor-logo">-->
        <!--                            <img src="/frontend/assets/images/sponsors-13.png" alt="">-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                    <div class="swiper-slide">-->
        <!--                        <div class="meeta-sponsor-logo">-->
        <!--                            <img src="/frontend/assets/images/uu.png" alt="">-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                    <div class="swiper-slide">-->
        <!--                        <div class="meeta-sponsor-logo">-->
        <!--                            <img src="/frontend/assets/images/ulab.png" alt="">-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                    <div class="swiper-slide">-->
        <!--                        <div class="meeta-sponsor-logo">-->
        <!--                            <img src="/frontend/assets/images/wu.png" alt="">-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                    <div class="swiper-slide">-->
        <!--                        <div class="meeta-sponsor-logo">-->
        <!--                            <img src="/frontend/assets/images/uap.png" alt="">-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                    <div class="swiper-slide">-->
        <!--                        <div class="meeta-sponsor-logo">-->
        <!--                            <img src="/frontend/assets/images/buft.png" alt="">-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                    <div class="swiper-slide">-->
        <!--                        <div class="meeta-sponsor-logo">-->
        <!--                            <img src="/frontend/assets/images/wou.png" alt="">-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                    <div class="swiper-slide">-->
        <!--                        <div class="meeta-sponsor-logo">-->
        <!--                            <img src="/frontend/assets/images/iub.png" alt="">-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</div>-->
        
        
        <div class="meeta-event-sponsors-3 section-padding-02">
            <div class="container">
                <div class="meeta-section-title-2 section-title-3 text-center">
                    <h2 class="main-title">Participants Institute</h2>
                </div>
                <div class="meeta-sponsor-wrap section-padding-02">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6">
                            <div class="meeta-sponsor-logo">
                                <a href="#"><img src="/frontend/assets/images/aiub.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="meeta-sponsor-logo">
                                <a href="#"><img src="/frontend/assets/images/sponsors-13.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="meeta-sponsor-logo">
                                <a href="#"><img src="/frontend/assets/images/pu.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="meeta-sponsor-logo">
                                <a href="#"><img src="/frontend/assets/images/ulab.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="meeta-sponsor-logo">
                                <a href="#"><img src="/frontend/assets/images/wu.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="meeta-sponsor-logo">
                                <a href="#"><img src="/frontend/assets/images/uap.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="meeta-sponsor-logo">
                                <a href="#"><img src="/frontend/assets/images/buft.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="meeta-sponsor-logo">
                                <a href="#"><img src="/frontend/assets/images/wou.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="meeta-sponsor-logo">
                                <a href="#"><img src="/frontend/assets/images/iub.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="meeta-sponsor-logo">
                                <a href="#"><img src="/frontend/assets/images/uu.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--<div class="header-btn" data-aos-delay="500" data-aos="fade-up" style="text-align: right; margin-top:20px;">-->
                <!--    <a class="btn-2" href="Participant.html">See More</a>-->
                <!--</div>-->
            </div>
        </div>
        <!-- Event Participant End -->
        
         <!-- Event Sponsors Start -->
        
        <div class="meeta-event-sponsors-3 section-padding-02" style="background-color: #b5b5b5;">
            <div class="container">
                <div class="meeta-section-title-2 section-title-3 text-center">
                    <h2 class="main-title">Event Sponsors</h2>
                </div>
                <div class="meeta-sponsor-wrap section-padding-02">
                    <div class="row justify-content-around align-items-center d-flex">
                        <div class="col-lg-4 col-sm-6">
                            <div class="meeta-sponsor-logo">
                                <a href="#"><img src="/frontend/assets/images/apub.png" alt=""></a>
                            </div>
                        </div>
                        <!-- <div class="col-lg-4 col-sm-6">
                            <div class="meeta-sponsor-logo">
                                <a href="#"><img src="/frontend/assets/images/sponsors-13.png" alt=""></a>
                            </div>
                        </div> -->
                        <div class="col-lg-4 col-sm-6">
                            <div class="meeta-sponsor-logo">
                                <a href="#"><img src="/frontend/assets/images/aiub.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="clearfix"></div> -->
        <!-- Event Sponsors End -->

        <!-- Event Delegate Participation Package Start -->
        <!-- <div class="meeta-event-schedule meeta-event-schedule-2 section-padding" style="background-color: transparent;
        background-image: linear-gradient(90deg, #822ea8 0%, #0444C9 100%);
        opacity: 0.8;
        transition: background 0.3s, border-radius 0.3s, opacity 0.3s;">
            <div class="container">

                <div class="meeta-section-title-2 section-title-4 text-center pb-5" >
                    <h4 style="color: white;" class="sub-title">Three Nights and Four Days</h4>
                    <h2 style="color: white;" class="main-title">Delegate Participation Package</h2>
                </div>

                <table class="table table-bordered cente" style="box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, .30); background-color: #fff; width: auto; margin-left: auto; margin-right: auto;">
                    <thead>
                        <tr>
                        <th colspan="2">Three Nights and Four Days</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">Arrival/Check-in :</th>
                            <td>October 13, 2023</td>
                        </tr>
                        <tr>
                            <th scope="row">Time </th>
                            <td>10:00 am to 4:00 pm</td>
                        </tr>
                        <tr>
                            <th scope="row">Venue</th>
                            <td colspan="2">Crowne Plaza, Deira, Dubai, UAE</td>
                        </tr>
                        <tr>
                            <th scope="row">Registration</th>
                            <td colspan="2">04:00 -06:00 pm</td>
                        </tr>
                        <tr>
                            <th scope="row">Evening </th>
                            <td colspan="2">Free Time</td>
                        </tr>
                    </tbody>
                </table>
                <div class="row">
                    <div class="col-md-4">
                        <table class="table table-bordered" style="box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, .30); background-color: #fff;">
                            <thead>
                              <tr>
                                <th colspan="2">Day 1</th>
                              </tr>
                            </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">Conference</th>
                                    <td>Saturday, October 14, 2023</td>
                                </tr>
                                <tr>
                                    <th scope="row">Breakfast</th>
                                    <td>7:00 - 8:00 am at hotel</td>
                                </tr>
                                <tr>
                                    <th scope="row">Registration</th>
                                    <td colspan="2">8:00 am</td>
                                </tr>
                                <tr>
                                    <th scope="row">Opening </th>
                                    <td>9:00 am</td>
                                </tr>
                                <tr>
                                    <th scope="row">Coffee Break</th>
                                    <td>11:00 - 11:30 am</td>
                                </tr>
                                <tr>
                                    <th scope="row">Panel</th>
                                    <td>11:30 am - 1:00 pm</td>
                                </tr>
                                <tr>
                                    <th scope="row">Lunch </th>
                                    <td>1:00 - 2:00 pm</td>
                                </tr>
                                <tr>
                                    <th scope="row">Breakout </th>
                                    <td>2:00 to 5:00 pm</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-4">
                        <table class="table table-bordered" style="box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, .30); background-color: #fff;">
                            <thead>
                              <tr>
                                <th colspan="2">Day 2</th>
                              </tr>
                            </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">Conference</th>
                                    <td>Sunday, October 15, 2023</td>
                                </tr>
                                <tr>
                                    <th scope="row">Breakfast</th>
                                    <td>7:00 am - 8 am at hotelacob</td>
                                </tr>
                                <tr>
                                    <th scope="row">Opening </th>
                                    <td colspan="2">9:00 am</td>
                                </tr>
                                <tr>
                                    <th scope="row">Coffee Break </th>
                                    <td>11:00 - 11:30 am</td>
                                </tr>
                                <tr>
                                    <th scope="row">Panel  </th>
                                    <td>11:30 am - 1:00 pm</td>
                                </tr>
                                <tr>
                                    <th scope="row">Lunch  </th>
                                    <td>1:00 - 2:00 pm</td>
                                </tr>
                                <tr>
                                    <th scope="row">Breakout</th>
                                    <td>2:00 to 5:00 pm</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-4">
                        <table class="table table-bordered" style="box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, .30); background-color: #fff;">
                            <thead>
                              <tr>
                                <th colspan="2">Day 3, Check-Out, 16 Oct 2023</th>
                              </tr>
                            </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">Breakfast  </th>
                                    <td>7:00 am - 8 am at hotel</td>
                                </tr>
                                <tr>
                                    <th scope="row">Check-out</th>
                                    <td>12:00 noon</td>
                                </tr>
                                <tr>
                                    <th scope="row">Shopping Tour </th>
                                    <td colspan="2">10:00 noon - 3:00 pm  (Optional)</td>
                                </tr>
                                <tr>
                                    <th scope="row">Desert Safari</th>
                                    <td>3:30 pm - till 9:30 pm   (Optional)</td>
                                </tr>
                                <tr>
                                    <th scope="row">Fujairah Tour</th>
                                    <td> 09:00 am - till 5:00 pm (Optional)</td>
                                </tr>
                                <tr>
                                    <th scope="row">Dinner Cruise  </th>
                                    <td> 08:00 - 10:00 pm (Optional)</td>
                                </tr>
                                <tr>
                                    <th scope="row">Airport Transfer </th>
                                    <td>10:00 pm to 11:00 pm</td>
                                </tr>
                                <tr>
                                    <th scope="row">Return Flight</th>
                                    <td>12:00 midnight to 2:00 am </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-4">
                        <table class="table table-bordered" style="box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, .30); background-color: #fff;">
                            <thead>
                              <tr>
                                <th colspan="2">Optional Tour Packages, 16 OCT 2023 </th>
                              </tr>
                            </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">Timing  </th>
                                    <td>3:30 pm till 9:30 pm</td>
                                </tr>
                                <tr>
                                    <th scope="row">Duration</th>
                                    <td>6 Hours</td>
                                </tr>
                                <tr>
                                    <th scope="row">Include </th>
                                    <td colspan="2">Dinner </td>
                                </tr>
                                <tr>
                                    <th scope="row">Price</th>
                                    <td>US$75.00 per person</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-8" style="font-weight: bold; padding-top: 40px; text-align: center;
                    color: #ffffff;">
                        <p>Participation Fee</p>
                        <p>Early Bird Offer : US$1,200 per person (Till September 15, 2023)</p>
                        <p>Attendance Fee : US$1,800 per person (After September 15, 2023)</p>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Event Delegate Participation Package End -->

       

        <!-- Blog Start -->
        <div class="meeta-blog section-padding">
            <div class="container">
                <div class="meeta-section-title-2 text-center">
                    <h4 class="sub-title">Latest News</h4>
                    <h2 class="main-title">Whats happening near</h2>
                </div>
                <div class="meeta-blog-wrap">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="single-blog">
                                <div class="blog-image">
                                    <a href="https://www.youtube.com/watch?v=xoJmLvTNu2E"><img src="/frontend/assets/images/blog/blog-4.jpg" alt="" height="300"></a>
                                </div>
                                <div class="blog-content">
                                    <!--<div class="blog-meta">-->
                                    <!--    <span class="category">Conference</span>-->
                                    <!--    <span class="date">Octobor 09, 2021</span>-->
                                    <!--</div>-->
                                    <h3 class="title"><a href="https://www.youtube.com/watch?v=xoJmLvTNu2E">Dubai Education Fair</a></h3><br>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="single-blog">
                                <div class="blog-image">
                                    <a href="https://www.dhakatribune.com/bangladesh/2022/10/28/bangladeshi-universities-strive-to-draw-middle-eastern-students"><img src="/frontend/assets/images/blog/blog-5.jpg" alt="" height="300"></a>
                                </div>
                                <div class="blog-content">
                                    <!--<div class="blog-meta">-->
                                    <!--    <span class="category color-1">Conference</span>-->
                                    <!--    <span class="date">Octobor 09, 2021</span>-->
                                    <!--</div>-->
                                    <h3 class="title"><a href="https://www.dhakatribune.com/bangladesh/2022/10/28/bangladeshi-universities-strive-to-draw-middle-eastern-students">Bangladeshi universities strive to draw Middle Eastern students</a></h3>
                                </div>
                            </div>
                        </div>
                        <!--<div class="col-lg-4 col-md-6">-->
                        <!--    <div class="single-blog">-->
                        <!--        <div class="blog-image">-->
                        <!--            <a href="blog-details.html"><img src="/frontend/assets/images/blog/blog-3.jpg" alt=""></a>-->
                        <!--        </div>-->
                        <!--        <div class="blog-content">-->
                        <!--            <div class="blog-meta">-->
                        <!--                <span class="category color-2">Conference</span>-->
                        <!--                <span class="date">Octobor 09, 2021</span>-->
                        <!--            </div>-->
                        <!--            <h3 class="title"><a href="blog-details.html">Registration for opening workshop </a></h3>-->
                        <!--        </div>-->
                        <!--    </div>-->
                        <!--</div>-->
                    </div>
                </div>
                
                <!--<div class="header-btn" data-aos-delay="500" data-aos="fade-up" style="text-align: right; margin-top:15px;">-->
                <!--    <a class="btn-2" href="blog.html">See More</a>-->
                <!--</div>-->
            </div>
        </div>
        <!-- Blog End -->

        <!-- Special Speakers Start -->
        <div class="meeta-event-sponsors-3 section-padding">
            <div class="container">
                <div class="meeta-sponsor-wrap section-padding" style="margin: 0 auto; border: 1px solid #fe0000;">
                    <h2 class="main-title text-center">Event Organizer</h2>
                    <div class="row">
                        <div class="col-lg-6 col-sm-6 col-6">
                            <div class="text-center">
                                <a href="https://spiralworld.biz/"><img src="/frontend/assets/images/spiralworld.png" height: 100px; alt=""></a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6 col-6">
                            <div class="text-center">
                                <a href="#" ><img src="/frontend/assets/images/panasian.png" height: 100px; style="margin-top: 10px;" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Speakers End -->
        
        <!-- Gallery Start -->
        <!-- <div class="meeta-gallery section-padding-02">
            <div class="row g-0">
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="single-gallery">
                        <div class="gallery-image">
                            <img src="/frontend/assets/images/gallery-1.jpg" alt="Gallery">
                        </div>
                        <div class="gallery-content">
                            <div class="gallery-content-wrap">
                                <a href="/frontend/assets/images/gallery-1.jpg" class="gallery-plus image-popup">
                                    <span></span>
                                </a>
                                <h4 class="gallery-title"><a href="#">Developer Conference 2021</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="single-gallery">
                        <div class="gallery-image">
                            <img src="/frontend/assets/images/gallery-2.jpg" alt="Gallery">
                        </div>
                        <div class="gallery-content">
                            <div class="gallery-content-wrap">
                                <a href="/frontend/assets/images/gallery-2.jpg" class="gallery-plus image-popup">
                                    <span></span>
                                </a>
                                <h4 class="gallery-title"><a href="#">Developer Conference 2021</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="single-gallery">
                        <div class="gallery-image">
                            <img src="/frontend/assets/images/gallery-7.jpg" alt="Gallery">
                        </div>
                        <div class="gallery-content">
                            <div class="gallery-content-wrap">
                                <a href="/frontend/assets/images/gallery-7.jpg" class="gallery-plus image-popup">
                                    <span></span>
                                </a>
                                <h4 class="gallery-title"><a href="#">Developer Conference 2021</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="single-gallery">
                        <div class="gallery-image">
                            <img src="/frontend/assets/images/gallery-8.jpg" alt="Gallery">
                        </div>
                        <div class="gallery-content">
                            <div class="gallery-content-wrap">
                                <a href="/frontend/assets/images/gallery-8.jpg" class="gallery-plus image-popup">
                                    <span></span>
                                </a>
                                <h4 class="gallery-title"><a href="#">Developer Conference 2021</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="single-gallery">
                        <div class="gallery-image">
                            <img src="/frontend/assets/images/gallery-4.jpg" alt="Gallery">
                        </div>
                        <div class="gallery-content">
                            <div class="gallery-content-wrap">
                                <a href="/frontend/assets/images/gallery-4.jpg" class="gallery-plus image-popup">
                                    <span></span>
                                </a>
                                <h4 class="gallery-title"><a href="#">Developer Conference 2021</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="single-gallery">
                        <div class="gallery-image">
                            <img src="/frontend/assets/images/gallery-3.jpg" alt="Gallery">
                        </div>
                        <div class="gallery-content">
                            <div class="gallery-content-wrap">
                                <a href="/frontend/assets/images/gallery-3.jpg" class="gallery-plus image-popup">
                                    <span></span>
                                </a>
                                <h4 class="gallery-title"><a href="#">Developer Conference 2021</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="single-gallery">
                        <div class="gallery-image">
                            <img src="/frontend/assets/images/gallery-9.jpg" alt="Gallery">
                        </div>
                        <div class="gallery-content">
                            <div class="gallery-content-wrap">
                                <a href="/frontend/assets/images/gallery-9.jpg" class="gallery-plus image-popup">
                                    <span></span>
                                </a>
                                <h4 class="gallery-title"><a href="#">Developer Conference 2021</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="single-gallery">
                        <div class="gallery-image">
                            <img src="/frontend/assets/images/gallery-10.jpg" alt="Gallery">
                        </div>
                        <div class="gallery-content">
                            <div class="gallery-content-wrap">
                                <a href="/frontend/assets/images/gallery-10.jpg" class="gallery-plus image-popup">
                                    <span></span>
                                </a>
                                <h4 class="gallery-title"><a href="#">Developer Conference 2021</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Gallery End -->
        
    </div>
    @endsection
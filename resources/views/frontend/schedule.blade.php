@extends('frontend.layouts.app')

@section('content')
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
        <!-- Slider Section End -->
        <!-- ================================================================================ -->

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
                             <h3 class="text-center mb-4">Venue: Crowne Plaza Hotel Deira – Dubai, Salah Al Din Road, Muraqqabat, Dubai</h3>
                                <li class="meeta-event-accordion-item">
                                    <div class="meeta-event-accordion-toggle">
                                        <div class="image">
                                            <img src="frontend/assets/images/schedule-1.jpg" alt="">
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
                                            <img src="frontend/assets/images/schedule-1.jpg" alt="">
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
                                            <img src="frontend/assets/images/schedule-3.jpg" alt="">
                                        </div>
                                        <div class="event-title">
                                            <span class="time">09:10 am</span>
                                            <h3 class="title">Keynote Address by the Chief Guest, HE Dr Dipu Moni MP, Honourable Education Minister of Bangladesh (To Be Confirmed)
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
                                            <img src="frontend/assets/images/schedule-3.jpg" alt="">
                                        </div>
                                        <div class="event-title">
                                            <span class="time">09:40 am</span>
                                            <h3 class="title">Keynote Address on Education System in Bangladesh by Secretary, Deputy Ministry of Education, Bangladesh (To Be Confirmed)
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
                                            <img src="frontend/assets/images/schedule-3.jpg" alt="">
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
                                            <img src="frontend/assets/images/schedule-3.jpg" alt="">
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
                                            <img src="frontend/assets/images/schedule-3.jpg" alt="">
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
                                            <img src="frontend/assets/images/schedule-3.jpg" alt="">
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
                                    <th scope="col">Anchor</th>
                                    <th scope="col">TBA</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <th scope="row">Panelist 1</th>
                                    <td>An Education Leader</td>
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
                                            <img src="frontend/assets/images/schedule-3.jpg" alt="">
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
                                    <th scope="col">TBA</th>
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
                            <h3 class="text-center mb-4">Venue: Crowne Plaza Hotel Deira – Dubai, Salah Al Din Road, Muraqqabat, Dubai</h3>
                                <li class="meeta-event-accordion-item">
                                    <div class="meeta-event-accordion-toggle">
                                        <div class="image">
                                            <img src="frontend/assets/images/schedule-1.jpg" alt="">
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
                                            <img src="frontend/assets/images/schedule-1.jpg" alt="">
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
                                            <img src="frontend/assets/images/schedule-3.jpg" alt="">
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
                                            <img src="frontend/assets/images/schedule-3.jpg" alt="">
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
                                            <img src="frontend/assets/images/schedule-3.jpg" alt="">
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
                                            <img src="frontend/assets/images/schedule-3.jpg" alt="">
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
                                    <th scope="col">Anchor</th>
                                    <th scope="col">TBA</th>
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
                                            <img src="frontend/assets/images/schedule-3.jpg" alt="">
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
                                            <img src="frontend/assets/images/schedule-3.jpg" alt="">
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
                                            <img src="frontend/assets/images/schedule-3.jpg" alt="">
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
                                            <img src="frontend/assets/images/schedule-3.jpg" alt="">
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
                                            <img src="frontend/assets/images/schedule-3.jpg" alt="">
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
                                    <th scope="col">Anchor</th>
                                    <th scope="col">TBA</th>
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
                                                    <img src="frontend/assets/images/schedule-2.jpg" alt="">
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
                                                    <img src="frontend/assets/images/schedule-1.jpg" alt="">
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
                                                    <img src="frontend/assets/images/schedule-3.jpg" alt="">
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

    </div>
        
@endsection
<!doctype html>
<html class="no-js" lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title> Bangladesh Education Forum - 2022</title>
        <meta name="robots" content="noindex, follow" />
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="/frontend/assets/images/favicon.png">
    
        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Big+Shoulders+Display:wght@300;400;500;600;700;800&family=Open+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Archivo:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
        <!-- CSS
        ============================================ -->
    
        <!-- Icon Font CSS -->
        <link rel="stylesheet" href="{{asset('/frontend/assets/css/all.min.css')}}">
        <link rel="stylesheet" href="{{asset('/frontend/assets/css/flaticon.css')}}">
    
        <!-- Plugins CSS -->
        <link rel="stylesheet" href="{{asset('/frontend/assets/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('/frontend/assets/css/swiper-bundle.min.css')}}">
        <link rel="stylesheet" href="{{asset('/frontend/assets/css/magnific-popup.css')}}">
        <link rel="stylesheet" href="{{asset('/frontend/assets/css/aos.css')}}">
        <link rel="stylesheet" href="{{asset('/frontend/assets/css/nice-select.css')}}">
    
        <!-- Main Style CSS -->
        <link rel="stylesheet" href="{{asset('/frontend/assets/css/style.css')}}">
    
    </head>

<body>


    <div class="main-wrapper">

        <!-- Preloader start -->
        <div id="preloader">
            <div class="preloader">
                <span></span>
                <span></span>
            </div>
        </div>
        <!-- Preloader End -->

        <!-- Header Start -->
        
        @include('frontend.layouts.nav')
        <!-- Header End -->



        <!-- Offcanvas Start-->
       
        <!-- Offcanvas End -->

        
        <!-- Slider Section Start  -->
        @yield('content')

    <!-- Footer Start -->
    @include('frontend.layouts.footer')

    <!-- Footer End -->

    <!-- back to top start -->
    
    <!-- back to top end -->

    <!-- Modal Form Start -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title" id="exampleModalLongTitle">Register</h2>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="login-register-form">
                        
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
                        <div class="alert alert-success">
                            {{ session()->get('success') }}  
                        </div><br />
                        @endif

                        <form action="{{ route('store.participants') }}" method="post">
                            @csrf
                            <div class="form-group m-2">
                                <input id="institute_name" type="text" class="form-control form-control-user @error('institute_name') is-invalid @enderror" name="institute_name" value="{{ old('institute_name') }}" required autocomplete="institute_name" placeholder="Name of the Institute" autofocus>

                                @error('institute_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group m-2">
                                <input id="address" type="text" class="form-control form-control-user @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address" placeholder="Address" autofocus>

                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group m-2">
                                <input id="email" type="email" class="form-control form-control-user @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Enter Email Address.">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group m-2">
                                <input id="vc_name" type="text" class="form-control form-control-user @error('vc_name') is-invalid @enderror" name="vc_name" value="{{ old('vc_name') }}" required autocomplete="vc_name" autofocus placeholder="Name of the VC">

                                @error('vc_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group m-2">
                                <input id="vc_email" type="email" class="form-control form-control-user @error('vc_email') is-invalid @enderror" name="vc_email" value="{{ old('vc_email') }}" required autocomplete="vc_email" autofocus placeholder="Email for VC">

                                @error('vc_email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group m-2">
                                <input id="vc_cell" type="tel" class="form-control form-control-user @error('vc_cell') is-invalid @enderror" name="vc_cell" value="{{ old('vc_cell') }}" required autocomplete="vc_cell" placeholder="Cell for VC" autofocus>

                                @error('vc_cell')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group m-2">
                                <input id="contact_name" type="text" class="form-control form-control-user @error('contact_name') is-invalid @enderror" name="contact_name" value="{{ old('contact_name') }}" required autocomplete="contact_name" placeholder="Contact Person Name " autofocus>

                                @error('contact_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group m-2">
                                <input id="contact_cell" type="tel" class="form-control form-control-user @error('contact_cell') is-invalid @enderror" name="contact_cell" value="{{ old('contact_cell') }}" required autocomplete="contact_cell" placeholder="Contact Person Cell " autofocus>

                                @error('contact_cell')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group m-2">
                                <textarea id="message" type="text" class="form-control form-control-user @error('message') is-invalid @enderror" name="message" value="{{ old('message') }}" required autocomplete="message" placeholder="Message" autofocus></textarea>

                                @error('message')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                                <!-- </div>
                                <div class="form-btn">
                                    <button class="btn-2">Register</button>
                                </div> -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button submit" name="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Form End -->


    <!-- JS
    ============================================ -->

     <!-- Modernizer & jQuery JS -->
     <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
     <script src="{{asset('/frontend/assets/js/vendor/modernizr-3.11.7.min.js')}}"></script>
     <script src="{{asset('/frontend/assets/js/vendor/jquery-1.12.4.min.js')}}"></script>
 
 
     <!-- Bootstrap JS -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
     <script src="{{asset('/frontend/assets/js/popper.min.js')}}"></script>
     <script src="{{asset('/frontend/assets/js/bootstrap.min.js')}}"></script>
 

    <!-- Plugins JS -->
    <script src="{{asset('/frontend/assets/js/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('/frontend/assets/js/back-to-top.js')}}"></script>
    <script src="{{asset('/frontend/assets/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('/frontend/assets/js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('/frontend/assets/js/waypoints.min.js')}}"></script>
    <script src="{{asset('/frontend/assets/js/aos.js')}}"></script>
    <script src="{{asset('/frontend/assets/js/jquery.nice-select.min.js')}}"></script>


    <!-- Main JS -->
    <script src="{{asset('/frontend/assets/js/main.js')}}"></script>

</body>

</html>
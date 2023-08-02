@extends('auth.layouts.app')

@section('content')
<div class="row justify-content-center">

    <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <!-- <div class="col-lg-6 d-none d-lg-block bg-login-image"></div> -->
                    <div class="col-lg-6" style="margin: 0 auto;">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Register Here</h1>
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
                                <div class="alert alert-success">
                                {{ session()->get('success') }}  
                                </div><br />
                            @endif
                            
                            <form action="{{ route('store.participants.byadmin') }}" method="post">
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
                            <div class="form-group m-2">
                                <button type="button submit" name="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                            <hr>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
@endsection

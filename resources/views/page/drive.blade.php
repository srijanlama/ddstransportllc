@extends('layouts.app')
@section('content')
        <!-- Start Page Title Area -->
        <div class="page-title-area bg-25 cs-breadcrumb">
            <div class="container">
                <div class="page-title-content">
                    <h2>Apply For Drive</h2>
                    <ul>
                        <li>
                            <a href="index.html">
                                Home
                            </a>
                        </li>
                        <li class="active"><a href="{{ route('drive.create') }}" class="active">Apply for
                                Drive</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Page Title Area -->

        <!-- Start Contact Area -->
        <section class="main-contact-area ptb-100 cs-drive-form cs-drive-form">
            <div class="container mb-3">
                @if (session('success'))
                    <div class="alert alert-primary">
                        {{ session('success') }}
                    </div>
                @endif
            </div>
            <div class="container">
                <form method="post" action="{{ route('drive.store') }}">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <input type="text" name="name" id="name" class="form-control" required
                                    data-error="Please enter your name" placeholder="Your Name">
                                <div class="help-block with-errors">
                                    @error('name')
                                        <ul class="list-unstyled">
                                            <li> {{ $message }}</li>
                                        </ul>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <input type="email" name="email" id="email" class="form-control" required
                                    data-error="Please enter your email" placeholder="Your Email">
                                <div class="help-block with-errors">
                                    @error('email')
                                        <ul class="list-unstyled">
                                            <li> {{ $message }}</li>
                                        </ul>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <input type="text" name="phone" id="phone" required data-error="Please enter your number"
                                    class="form-control" placeholder="Your Phone">
                                <div class="help-block with-errors">
                                    @error('email')
                                        <ul class="list-unstyled">
                                            <li> {{ $message }}</li>
                                        </ul>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group states">
                                <select name="state" class="form-control">
                                    @foreach ($states as $state)
                                        <option value="{{ $state->name }}">{{ $state->name }}</option>
                                    @endforeach
                                </select>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="col-12">
                            <button type="submit" class="default-btn btn-two">
                                <span>Apply for Drive</span>
                            </button>
                            <div id="msgSubmit" class="h3 text-center hidden"></div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
        <!-- End Contact Area -->
        <!-- Start Contact Info Area -->
        <section class="contact-info-area bg-color pt-100 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-contact-info">
                            <i class="bx bx-envelope"></i>
                            <h3>Email Us:</h3>
                            <a href="mailto:hello@ezio.com">{{ isset($setting->email) ? $setting->email: '' }}</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="single-contact-info">
                            <i class="bx bx-phone-call"></i>
                            <h3>Call Us:</h3>
                            <a href="tel:+1-(123)-456-7890">{{ isset($setting->phone) ? $setting->phone: '' }}</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="single-contact-info">
                            <i class="bx bx-location-plus"></i>
                            <h3>London</h3>
                            <a href="#">{{ isset($setting->address) ? $setting->address: '' }}</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="single-contact-info">
                            <i class="bx bx-support"></i>
                            <h3>Live Chat</h3>
                            <a href="#">Live Chat 24/7</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Contact Info Area -->
  
@endsection

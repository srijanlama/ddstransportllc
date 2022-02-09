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

<!-- Start Driver Info -->
<section class="main-contact-area ptb-100 cs-drive-form cs-drive-form">
    <div class="container">
        <step-wizard-form :states="{{json_encode($states)}}"></step-wizard-form>
    </div>
</section>
<!-- End Driver Info -->
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
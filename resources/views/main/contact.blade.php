@extends('layouts.main')
@section('content')

@section('title', 'Contact')

<div class="contact-form section-padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="customer-img">
                <img class="img-fluid" src="{{ asset('public/images/bg/contact.jpg') }}" alt=""
                    style="height:90%;width:70%;margin-left:20%">
            </div>
            <div class="col-xl-6">
                <div class="section-title">
                    <h2>Let us hear from you directly!</h2>
                    <p>We always want to hear from you! Let us know how we can best help you and we'll do our
                        very best.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4">
                <div class="info-list">
                    <h5 class="mb-3">Address</h5>
                    <ul>
                        <li><i class="fa fa-map-marker"></i>
                            <b>Headquarters</b></br>
                            Rotermanni 6,</br>
                            Tallinn,</br>
                            10111</br>
                            Estonia
                        </li>
                        <li><i class="fa fa-envelope"></i> support@bittrade.biz</li>
                        <li><i class="fa fa-mobile"></i> +1-5594603092</li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-8">
                <form>
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="form-group mb-5">

                                <!-- Label -->
                                <label for="contactName">
                                    Full name
                                </label>

                                <!-- Input -->
                                <input type="text" class="form-control" id="contactName" placeholder="Full name">

                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group mb-5">

                                <!-- Label -->
                                <label for="contactEmail">
                                    Email
                                </label>

                                <!-- Input -->
                                <input type="email" class="form-control" id="contactEmail"
                                    placeholder="hello@bittrade.biz">

                            </div>
                        </div>
                    </div>
                    <!-- / .row -->
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group mb-7 mb-md-9">

                                <!-- Label -->
                                <label for="contactMessage">
                                    What can we help you with?
                                </label>

                                <!-- Input -->
                                <textarea class="form-control" id="contactMessage" rows="5"
                                    placeholder="Tell us what we can help you with!"></textarea>

                            </div>
                        </div>
                    </div>
                    <!-- / .row -->
                    <div class="row justify-content-center">
                        <div class="col-auto">

                            <!-- Submit -->
                            <button type="submit" class="btn btn-primary lift">
                                Send message
                            </button>

                        </div>
                    </div>
                    <!-- / .row -->
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
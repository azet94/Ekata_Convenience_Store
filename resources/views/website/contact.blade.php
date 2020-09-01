<!-- website header -->
@extends('layouts.website.header')
<!-- website header ends -->
{{--<link rel="stylesheet" href="{{ asset('css/cntbox.css') }}">--}}
{{---------------------}}

@section('style')
    <style>
        .contact-us {
            background-color: #e1e1e1;
            text-align: center;
        }

        .contact-us h1 {
            font-family: "Times New Roman";
            font-size: 3rem;
            color: #CF7500;
        }

        .card_box .fa-color {
            color: #CF7500;
        }

        .card_box .card {
            border-color: #CF7500;
            box-shadow: none;
            border-radius: 15px;
        }

        .enq-form {
            background-color: #CF7500;
            padding: 30px 0;
            height: 27rem;
        }

        .enquiry-section {
            background-color: #CF7500;
        }

        h6 a, address a{
            text-decoration: none;
            font-size: 15px;
            color: #212529;
        }

    </style>
@stop

@section('content')
    <div class="container-fluid">
        <div class="row py-5 d-flex justify-content-center text-center contact-us">
            <div class="">
                <h1>Contact Us</h1>
                <p>Ekata Convinence Store sit amet, consectetur adipiscing</p>
                <a type="button" class="btn bg-main-primary text-white px-3 py-1" href="tel:12345678">Call Us</a>
            </div>
        </div>
        <div class="container card_box">
            <div class="row my-5 py-3">
                <div class="col-md-4 px-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-md-3">
                                    <i class="fas fa-phone-alt fa-4x fa-color"></i>
                                </div>
                                <div class="col-md-9 text-center">
                                    <h4 class="font-weight-bold pb-3">PHONE</h4>
                                    <h6><a href="tel:12345678">Contact Num</a></h6>
                                    <h6><a href="tel:12345678">Opt Contact Num</a></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 px-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-md-3">
                                    <i class="far fa-envelope fa-4x fa-color"></i>
                                </div>
                                <div class="col-md-9 text-center">
                                    <h4 class="font-weight-bold pb-3">EMAIL</h4>
                                    <h6><a href="mailto:melcleaning@gmail.com">email</a></h6>
                                    <h6><a href="mailto:melcleaning@gmail.com">opt email</a></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 px-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-md-3">
                                    <i class="fas fa-map-marker-alt fa-4x fa-color"></i>
                                </div>
                                <div class="col-md-9 text-center">
                                    <h4 class="font-weight-bold pb-3">LOCATION</h4>
                                    <address>
                                        <a href="https://www.google.com/maps/place/Softtech+Multimedia+Pvt.+Ltd.+Chitwan/@27.6875094,84.4318738,17z/data=!3m1!4b1!4m5!3m4!1s0x3994fb0a4785686d:0xd7ed579bd57a1450!8m2!3d27.6875094!4d84.4340678" target="_blank">
                                            1600 Pennsylvania Avenue NW Washington, DC 20500
                                        </a>
                                    </address>
                                    {{--<h6>365 MURRAY ROAD, PRESTON</h6>
                                    <h6>VIC 3072</h6>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid enquiry-section">
        <div class="container">
            <div class="row py-5">
                <div class="col-md-6 text-center">
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-8 text-center">
                            <h3 class="text-white font-weight-bold text-center">ENQUIRY FORM</h3>
                            <input class="form-control mt-4" type="text" name="firstname" placeholder="Name">
                            <input class="form-control mt-3" type="email" name="email" placeholder="E-mail">
                            <input class="form-control mt-3" type="phone" name="phone" placeholder="Phone No.">
                            <textarea class="form-control mt-3" rows="5" placeholder="Description"></textarea>
                            <input class="btn border-white text-white mt-4" type="submit" value="SEND">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 text-center">
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-8 text-center">
                            <h3 class="text-white font-weight-bold text-center">LOCATION</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop

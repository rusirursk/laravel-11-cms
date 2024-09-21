@extends('frontend.layouts.master')

@section('content')

        <!-- Modal Search Start -->
        <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Search by keyword</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex align-items-center bg-primary">
                        <div class="input-group w-75 mx-auto d-flex">
                            <input type="search" class="form-control p-3" placeholder="keywords" aria-describedby="search-icon-1">
                            <span id="search-icon-1" class="btn bg-light border nput-group-text p-3"><i class="fa fa-search"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Search End -->


        <!-- Header Start -->
        <div class="container-fluid bg-breadcrumb">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">About Us</h4>
                <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active text-primary">About</li>
                </ol>    
            </div>
        </div>
        <!-- Header End -->


        <!-- About Start -->
        <div class="container-fluid about py-5">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-7 wow fadeInLeft" data-wow-delay="0.2s">
                        <div class="h-100">
                            <h4 class="text-primary">About Us</h4>
                            <h1 class="display-4 mb-4">Providing you with the highest quality of features</h1>
                            <div class="row g-4 mb-4">
                                <div class="col-md-6">
                                    <a href="#" class="d-flex">
                                        <span class="fas fa-bolt fa-3x me-3"></span>
                                        <h4 class="mb-0">Emergency Power Solution</h4>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="#" class="d-flex">
                                        <span class="fas fa-broadcast-tower fa-3x me-3"></span>
                                        <h4 class="mb-0">Full-Service Electrical Layout</h4>
                                    </a>
                                </div>
                            </div>
                            <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga, minus. At velit nam, animi culpa fugiat neque facere illum, eum possimus omnis accusantium deleniti consectetur temporibus necessitatibus asperiores sunt dicta?
                            </p>
                            <div class="text-dark mb-4">
                                <p class="fs-5"><span class="fa fa-check text-primary me-2"></span> Installed, maintained and repaired lighting for clients.</p>
                                <p class="fs-5"><span class="fa fa-check text-primary me-2"></span> Increasingly popular way to generate electricity.</p>
                                <p class="fs-5"><span class="fa fa-check text-primary me-2"></span> Protect electrical devices from damage.</p>
                            </div>
                            <a class="btn btn-primary py-3 px-4 px-md-5 ms-2" href="#">Contact us</a>
                        </div>
                    </div>
                    <div class="col-lg-5 wow fadeInRight" data-wow-delay="0.2s">
                        <div class="position-relative h-100">
                            <img src="{{asset('FrontEnd/img/about-1.jpg')}}" class="img-fluid w-100 h-100" style="object-fit: cover;" alt="">
                            <div class="bg-white">
                                <div class="position-absolute pt-3 bg-white" style="width: 50%; left: 0; bottom: 0;">
                                    <div class="bg-primary p-4">
                                        <h4 class="display-2 mb-0">25+</h4>
                                        <p class="text-white fs-5 mb-0">years of experience</p>
                                    </div>
                                </div>
                                <div class="position-absolute p-3 bg-white pb-0 pe-0" style="width: 50%; bottom: 0; right: 0;">
                                    <img src="img/about-2.jpg" class="img-fluid" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

@endsection
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
        <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Our Services</h4>
        <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Pages</a></li>
            <li class="breadcrumb-item active text-primary">Service</li>
        </ol>    
    </div>
</div>
<!-- Header End -->


<!-- Services Start -->
<div class="container-fluid service py-5">
    <div class="container py-5">
        <div class="d-flex flex-column mx-auto text-center mb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h4 class="text-primary">Our Services</h4>
            <h1 class="display-4 mb-4">The Best Service For You</h1>
            <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem, deserunt provident ab voluptates rerum eaque eum magni autem atque in minus laboriosam corrupti deleniti voluptatibus rem reiciendis modi veniam animi?
            </p>
        </div>
        <div class="row g-5 align-items-center">
            <div class="col-lg-3 wow fadeInLeft" data-wow-delay="0.2s">
                <ul class="nav">
                    <li class="nav-item me-lg-0 mb-4">
                        <a class="py-3 px-5 active" data-bs-toggle="pill" href="#ServiceTab-1">
                            <span>Commercial</span>
                        </a>
                    </li>
                    <li class="nav-item me-lg-0 mb-4">
                        <a class="py-3 px-5" data-bs-toggle="pill" href="#ServiceTab-2">
                            <span>Residential</span>
                        </a>
                    </li>
                    <li class="nav-item me-lg-0 mb-4 mb-lg-0">
                        <a class="py-3 px-5" data-bs-toggle="pill" href="#ServiceTab-3">
                            <span>Industrial</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-9 wow fadeInRight" data-wow-delay="0.3s">
                <div class="tab-content">
                    <div id="ServiceTab-1" class="tab-pane fade show p-0 active">
                        <div class="service-carousel owl-carousel">
                            <div class="service-item">
                                <img src="FrontEnd/img/commercial-1.jpg" class="img-fluid w-100" alt="">
                                <div class="border border-top-0 p-4">
                                    <h4 class="mb-3">Brite Spark Services</h4>
                                    <p class="mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Exercitationem, beatae ex. Id esse autem ratione vero cupiditate tempora recusandae est!
                                    </p>
                                    <a class="btn btn-primary py-2 px-4" href="#">Read More</a>
                                </div>
                            </div>
                            <div class="service-item">
                                <img src="FrontEnd/img/commercial-2.jpg" class="img-fluid w-100" alt="">
                                <div class="border border-top-0 p-4">
                                    <h4 class="mb-3">Energy Ease Packages</h4>
                                    <p class="mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Exercitationem, beatae ex. Id esse autem ratione vero cupiditate tempora recusandae est!
                                    </p>
                                    <a class="btn btn-primary py-2 px-4" href="#">Read More</a>
                                </div>
                            </div>
                            <div class="service-item">
                                <img src="FrontEnd/img/commercial-3.jpg" class="img-fluid w-100" alt="">
                                <div class="border border-top-0 p-4">
                                    <h4 class="mb-3">Electra Care Packages</h4>
                                    <p class="mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Exercitationem, beatae ex. Id esse autem ratione vero cupiditate tempora recusandae est!
                                    </p>
                                    <a class="btn btn-primary py-2 px-4" href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="ServiceTab-2" class="tab-pane fade show p-0">
                        <div class="service-carousel owl-carousel">
                            <div class="service-item">
                                <img src="{{asset('FrontEnd/img/residential-1.jpg')}}" class="img-fluid w-100" alt="">
                                <div class="border border-top-0 p-4">
                                    <h4 class="mb-3">Electrical Services</h4>
                                    <p class="mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Exercitationem, beatae ex. Id esse autem ratione vero cupiditate tempora recusandae est!
                                    </p>
                                    <a class="btn btn-primary py-2 px-4" href="#">Read More</a>
                                </div>
                            </div>
                            <div class="service-item">
                                <img src="{{asset('FrontEnd/img/residential-2.jpg')}}" class="img-fluid w-100" alt="">
                                <div class="border border-top-0 p-4">
                                    <h4 class="mb-3">Security Systems</h4>
                                    <p class="mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Exercitationem, beatae ex. Id esse autem ratione vero cupiditate tempora recusandae est!
                                    </p>
                                    <a class="btn btn-primary py-2 px-4" href="#">Read More</a>
                                </div>
                            </div>
                            <div class="service-item">
                                <img src="{{asset('FrontEnd/img/residential-3.jpg')}}" class="img-fluid w-100" alt="">
                                <div class="border border-top-0 p-4">
                                    <h4 class="mb-3">Air Conditioner</h4>
                                    <p class="mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Exercitationem, beatae ex. Id esse autem ratione vero cupiditate tempora recusandae est!
                                    </p>
                                    <a class="btn btn-primary py-2 px-4" href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="ServiceTab-3" class="tab-pane fade show p-0">
                        <div class="service-carousel owl-carousel">
                            <div class="service-item">
                                <img src="{{asset('FrontEnd/img/industrial-1.jpg')}}" class="img-fluid w-100" alt="">
                                <div class="border border-top-0 p-4">
                                    <h4 class="mb-3">Factory Manufacture</h4>
                                    <p class="mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Exercitationem, beatae ex. Id esse autem ratione vero cupiditate tempora recusandae est!
                                    </p>
                                    <a class="btn btn-primary py-2 px-4" href="#">Read More</a>
                                </div>
                            </div>
                            <div class="service-item">
                                <img src="{{asset('FrontEnd/img/industrial-2.jpg')}}" class="img-fluid w-100" alt="">
                                <div class="border border-top-0 p-4">
                                    <h4 class="mb-3">General Electrical</h4>
                                    <p class="mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Exercitationem, beatae ex. Id esse autem ratione vero cupiditate tempora recusandae est!
                                    </p>
                                    <a class="btn btn-primary py-2 px-4" href="#">Read More</a>
                                </div>
                            </div>
                            <div class="service-item">
                                <img src="{{asset('FrontEnd/img/industrial-3.jpg')}}" class="img-fluid w-100" alt="">
                                <div class="border border-top-0 p-4">
                                    <h4 class="mb-3">Electrical Planing</h4>
                                    <p class="mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Exercitationem, beatae ex. Id esse autem ratione vero cupiditate tempora recusandae est!
                                    </p>
                                    <a class="btn btn-primary py-2 px-4" href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Services End -->

@endsection
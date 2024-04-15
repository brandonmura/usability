<!-- Events Start -->
<div class="container-fluid events py-5">
    <div class="container py-5">
        <div class="pb-5 @if(Request::segment(1) == "dashboard") display-none @endif ">
            <div class="row g-4 align-items-end">
                <div class="col-xl-8">
                    <h4 class="text-primary sub-title fw-bold wow fadeInUp" data-wow-delay="0.1s">Activities</h4>
                    <h1 class="display-2 mb-0 wow fadeInUp white" data-wow-delay="0.3s">Upcoming Activities</h1>
                </div>
                <div class="col-xl-4 text-xl-end pb-3 wow fadeInUp" data-wow-delay="0.3s">
                    <a class="btn btn-primary rounded-pill text-white py-3 px-5" href="#">View All Activities</a>
                </div>
            </div>
        </div>
        <div class="row g-4 justify-content-center">
            <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                <div class="event-item rounded">
                    <div class="position-relative">
                        <img src="/img/service-1.jpg" class="img-fluid rounded-top w-100" alt="Image">
                        <div class="bg-primary text-white fw-bold rounded d-inline-block position-absolute p-2" style="top: 0; right: 0;">JAN 20</div>
                        <div class="d-flex justify-content-between border-start border-end bg-white px-2 py-2 w-100 position-absolute" style="bottom: 0; left: 0; opacity: 0.8;">
                            <a href="#" class="text-dark"><i class="fas fa-clock text-primary"></i> 08:00AM - 10:00PM</a>
                            <a href="#" class="text-dark"><span class="fas fa-map-marker-alt text-primary"></span> Middelburg</a>
                        </div>
                    </div>
                    <div class="border border-top-0 rounded-bottom p-4">
                        <a href="#" class="h4 mb-3 d-block">Lorem ipsum - Loperm ipsum</a>
                        <p class="mb-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni vero excepturi blanditiis quidem</p>
                        <a class="btn btn-primary rounded-pill text-white py-2 px-4" href="#">Watch Now</a>
                        @php
                            if(Request::segment(1) == "dashboard")
                                echo '<a class="btn btn-secondary rounded-pill text-white py-2 px-4" href="#">Remove</a>';
                        @endphp
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                <div class="event-item rounded">
                    <div class="position-relative">
                        <img src="/img/service-2.jpg" class="img-fluid rounded-top w-100" alt="Image">
                        <div class="bg-primary text-white rounded d-inline-block position-absolute p-2" style="top: 0; right: 0;">JUN 30</div>
                        <div class="d-flex justify-content-between border-start border-end bg-white px-2 py-2 w-100 position-absolute" style="bottom: 0; left: 0; opacity: 0.8;">
                            <a href="#" class="text-dark"><i class="fas fa-clock text-primary"></i> 08:00AM - 10:00PM</a>
                            <a href="#" class="text-dark"><span class="fas fa-map-marker-alt text-primary"></span> Middelburg</a>
                        </div>
                    </div>
                    <div class="border rounded-bottom p-4">
                        <a href="#" class="h4 mb-3 d-block">Lorem ipsum and Loperm ipsum</a>
                        <p class="mb-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni vero excepturi blanditiis quidem</p>
                        <a class="btn btn-primary rounded-pill text-white py-2 px-4" href="#">Watch Now</a>
                        @php
                            if(Request::segment(1) == "dashboard")
                                echo '<a class="btn btn-secondary rounded-pill text-white py-2 px-4" href="#">Remove</a>';
                        @endphp
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                <div class="event-item rounded">
                    <div class="position-relative">
                        <img src="/img/service-3.jpg" class="img-fluid rounded-top w-100" alt="Image">
                        <div class="bg-primary text-white rounded d-inline-block position-absolute p-2" style="top: 0; right: 0;">MAY 15</div>
                        <div class="d-flex justify-content-between border-start border-end bg-white px-2 py-2 w-100 position-absolute" style="bottom: 0; left: 0; opacity: 0.8;">
                            <a href="#" class="text-dark"><i class="fas fa-clock text-primary"></i> 08:00AM - 10:00PM</a>
                            <a href="#" class="text-dark"><span class="fas fa-map-marker-alt text-primary"></span> Middelburg</a>
                        </div>
                    </div>
                    <div class="border rounded-bottom p-4">
                        <a href="#" class="h4 mb-3 d-block">Lorem ipsum - Loperm ipsum</a>
                        <p class="mb-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni vero excepturi blanditiis quidem</p>
                        <a class="btn btn-primary rounded-pill text-white py-2 px-4" href="#">Watch Now</a>
                        @php
                            if(Request::segment(1) == "dashboard")
                                echo '<a class="btn btn-secondary rounded-pill text-white py-2 px-4" href="#">Remove</a>';
                        @endphp
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                <div class="event-item rounded">
                    <div class="position-relative">
                        <img src="/img/service-4.jpg" class="img-fluid rounded-top w-100" alt="Image">
                        <div class="bg-primary text-white rounded d-inline-block position-absolute p-2" style="top: 0; right: 0;">APR 2</div>
                        <div class="d-flex justify-content-between border-start border-end bg-white px-2 py-2 w-100 position-absolute" style="bottom: 0; left: 0; opacity: 0.8;">
                            <a href="#" class="text-dark"><i class="fas fa-clock text-primary"></i> 08:00AM - 10:00PM</a>
                            <a href="#" class="text-dark"><span class="fas fa-map-marker-alt text-primary"></span> Middelburg</a>
                        </div>
                    </div>
                    <div class="border rounded-bottom p-4">
                        <a href="#" class="h4 mb-3 d-block">Lorem ipsum - Loperm ipsum</a>
                        <p class="mb-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni vero excepturi blanditiis quidem</p>
                        <a class="btn btn-primary rounded-pill text-white py-2 px-4" href="#">Watch Now</a>
                        @php
                            if(Request::segment(1) == "dashboard")
                                echo '<a class="btn btn-secondary rounded-pill text-white py-2 px-4" href="#">Remove</a>';
                        @endphp
                    </div>
                </div>
            </div>

            @php
                if(Request::segment(1) == "dashboard")
                    include(resource_path('views/dashboard/layouts/create.blade.php'));
            @endphp
        </div>
    </div>
</div>
<!-- Events End -->

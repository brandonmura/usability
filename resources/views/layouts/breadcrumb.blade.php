@php
    $page =  Request::segment(1) ;

    if ($page == "news")
        $pagetitle = "Our Blog & News";
    elseif ($page = "events")
        $pagetitle = "Upcoming Activities";
    elseif ($page = "about")
        $pagetitle = "About Us";

@endphp



<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h3 class="text-primary display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">{{$pagetitle}}</h3>

            <ol class="breadcrumb justify-content-center text-white mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="/" class="text-dark">Home</a></li>
                <li class="breadcrumb-item"><a href="#" class="text-dark">Pages</a></li>
                <li class="breadcrumb-item active text-primary">
                    {{Request::segment(1)}}
            </ol>
    </div>
</div>
<!-- Header End -->

@extends('layouts.master')

@section('content')

<!-- hero-area-start -->
@include('home.hero')
<!-- hero-area-end -->

<!-- feature-area-start -->
@include('home.feature')
<!-- feature-area-end -->

<!-- about-area-start -->
@include('home.about')
<!-- about-area-end -->

<!-- catagori-area-start -->
@include('home.category')
<!-- catagori-area-end -->

<!-- services-area-start -->
@include('home.services')
<!-- service-area-end -->

<!-- slider-text-area-start -->
@include('home.slider')
<!-- slider-text-area-end -->

<!-- business-area-start -->
@include('home.business')
<!-- business-area-end -->

<!-- testimonial-area-start -->
@include('home.testimonial')
<!-- testimonial-area-end -->

<!-- brand-area-start -->
@include('home.brand')
<!-- brand-area-end -->

<!-- blog-area-start -->
@include('home.blog')
<!-- blog-area-end -->

<!-- cta-area-start -->
@include('home.cta')
<!-- cta-area-end -->

@endsection

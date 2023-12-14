@extends('layouts.master')

@section('content')

<!-- breadcrumb-area-start -->
@include('aboutus.breadcrumb')
<!-- breadcrumb-area-end -->

<!-- services-area-start -->
@include('aboutus.services')
<!-- service-area-end -->

<!-- choose-area-start -->
@include('aboutus.area')
<!-- choose-area-end -->

<!-- service-area-start -->
@include('aboutus.services2')
<!-- service-area-end -->

<!-- choose-area-start -->
@include('aboutus.area2')
<!-- choose-area-end -->

<!-- team-area-start -->
@include('aboutus.team')
<!-- team-area-end -->

<!-- faq-area-start -->
@include('aboutus.faq')
<!-- faq-area-end -->

<!-- cta-area-start -->
@include('aboutus.cta')
<!-- cta-area-end -->

@endsection

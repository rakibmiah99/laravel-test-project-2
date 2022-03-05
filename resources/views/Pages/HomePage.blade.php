@extends('App.layout')
@section('content')
    @include('Component.header')
    <!-- Location Overview area starts -->
    <section class="location-overview-area padding-top-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <form id="msform" method="post" action="{{url("/pay")}}" class="msform">
                        <input type="hidden" value="{{ csrf_token() }}" name="_token" />
                        <ul class="overview-list step-list">
                            <li class="list active" id="account">
                                <a class="list-click" href="javascript:void(0)"> <span class="list-number">1</span> Location </a>
                            </li>
                            <li class="list">
                                <a class="list-click" href="javascript:void(0)"> <span class="list-number">2</span> Service </a>
                            </li>
                            <li class="list">
                                <a class="list-click" href="javascript:void(0)"> <span class="list-number">3</span> Date & Time </a>
                            </li>
                            <li class="list">
                                <a class="list-click" href="javascript:void(0)"> <span class="list-number">4</span> Information </a>
                            </li>
                            <li class="list">
                                <a class="list-click" href="javascript:void(0)"> <span class="list-number">5</span> Confirmation </a>
                            </li>
                        </ul>
                        <!-- Location -->
                        @include('Component.HomePage.location')
                        <!-- Service -->
                        @include('Component.HomePage.service')
                        <!-- Date & Time -->
                        @include('Component.HomePage.dateTime')
                        <!-- Information -->
                        @include('Component.HomePage.information')
                        <!-- Confirmation -->
                        @include('Component.HomePage.confirmation')
                        <!-- Successful Complete -->
                        @include('Component.HomePage.successfull')
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Location Overview area end -->
    @include('Component.footer')
@endsection

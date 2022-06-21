@extends('frontend.master.master')
@section('content')
<title>ToletX-Rooftop</title>

<!-- Header Start -->
<header class="mt-4">
    <div class="container-fluid">
        <div class="row main-search">

        </div>
        <div class="row row1">
            <div class="col-md-12">
                <div class="row  ">
                    <div class="col-md-2 col-small mx-2 main-service text-center single_box" onclick="location.href='{{route('rooftop')}}'">
                        <span class="icon-rooftop service_item"></span>
                        <br>
                        <span class="service_item_name"> Rooftop</span>
                    </div>
                </div>
                <div class="row ml-1 mr-4 ">
                    <div class="container container-fluid">
                        <form class="form-horizontal top-form" action="{{route('rooftop_search')}}" method="get" role="form">
                            <div class="row justify-content-center">
                                
                             @include('frontend.include.primary_search')
                            </div>
                            <!-- Checkbox filters -->
                            <div class="mt-3">

                                <div class="form-check form-check-inline ml-3">
                                    <input class="form-check-input" type="checkbox" name="wifi" id="wifi" value="wifi">
                                    <label class="form-check-label checkboxes-label" for="wifi">Wifi</label>
                                </div>
                                <div class="mt-3">

                                    <div class="form-check form-check-inline ml-3">
                                        <input class="form-check-input" type="checkbox" name="lift" id="lift" value="lift">
                                        <label class="form-check-label checkboxes-label" for="lift">Lift</label>
                                    </div>


                                    <div class="form-check form-check-inline ml-3">
                                        <input class="form-check-input" type="checkbox" name="parking" id="parking" value="parking">
                                        <label class="form-check-label checkboxes-label" for="parking">Parking</label>
                                    </div>
                                    <div class="form-check form-check-inline ml-3">
                                        <input class="form-check-input" type="checkbox" name="utilities" id="dining" value="utilities">
                                        <label class="form-check-label checkboxes-label" for="dining">Utilities</label>
                                    </div>
                                    <div class="mt-3">
                                        <div class="form-check form-check-inline ml-3">
                                            <input class="form-check-input" type="checkbox" name="shed" id="swimming_pool" value="Shed">
                                            <label class="form-check-label checkboxes-label" for="shade">Shad</label>
                                        </div>

                                        <div class="form-check form-check-inline ml-3">
                                            <input class="form-check-input" type="checkbox" name="parking" id="fire_safety" value="parking">
                                            <label class="form-check-label checkboxes-label" for="fire_safety">Parking</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3 ">

                                @include('frontend.pricerange')
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Header End -->



<!-- Option 2: Separate Popper and Bootstrap JS -->


@endsection

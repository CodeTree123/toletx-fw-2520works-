@extends('frontend.master.master')
@section('content')
<title>ToletX-Playground</title>

<!-- Header Start -->
<header class="mt-4">
    <div class="container-fluid">
        <div class="row main-search">

        </div>
        <div class="row row1">
            <div class="col-md-12">
                <div class="row  " >
                    <div class="col-md-2 col-small mx-2 main-service text-center single_box" onclick="location.href='{{route('playground')}}'">
                        <span class="icon-playground service_item"></span>
                        <br>
                        <span class="service_item_name"> Play Ground</span>
                    </div>
                </div>
                <div class="row ml-1 mr-4 ">
                    <div class="container container-fluid">
                        <form class="form-horizontal top-form" action="{{route('playground_search')}}" method="get" role="form">
                            <div class="row justify-content-center">
                            
                            @include('frontend.include.primary_search')
                            </div>
                            <!-- Checkbox filters -->
                            <div class="mt-3">
                                <div class="form-check form-check-inline ml-3">
                                    <input class="form-check-input" type="checkbox" name="attached_toilet" id="attached_toilet" value="Attached">
                                    <label class="form-check-label checkboxes-label" for="attached_toilet">Attached Toilet</label>
                                </div>

                                <div class="form-check form-check-inline ml-3">
                                    <input class="form-check-input" type="checkbox" name="hot_water" id="hot_water" value="hot_water">
                                    <label class="form-check-label checkboxes-label" for="hot_water">Hot Water</label>
                                </div>

                                <div class="form-check form-check-inline ml-3">
                                    <input class="form-check-input" type="checkbox" name="wifi" id="wifi" value="wifi">
                                    <label class="form-check-label checkboxes-label" for="wifi">Wifi</label>
                                </div>

                                <div class="mt-3">
                                    <div class="form-check form-check-inline ml-3">
                                        <input class="form-check-input" type="checkbox" name="laundry" id="laundry" value="laundry">
                                        <label class="form-check-label checkboxes-label" for="laundry">Laundry</label>
                                    </div>
                                    <div class="form-check form-check-inline ml-3">
                                        <input class="form-check-input" type="checkbox" name="parking" id="parking" value="parking">
                                        <label class="form-check-label checkboxes-label" for="parking">Parking</label>
                                    </div>

                                    <div class="mt-3">
                                        <div class="form-check form-check-inline ml-3">
                                            <input class="form-check-input" type="checkbox" name="gym" id="gym" value="gym">
                                            <label class="form-check-label checkboxes-label" for="gym">Gym</label>
                                        </div>

                                        <div class="form-check form-check-inline ml-3">
                                            <input class="form-check-input" type="checkbox" name="" id="fire_safety" value="fire_safety">
                                            <label class="form-check-label checkboxes-label" for="fire_safety">Fire Safety</label>
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






@endsection

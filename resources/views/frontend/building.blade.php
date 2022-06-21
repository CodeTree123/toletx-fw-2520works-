@extends('frontend.master.master')
@section('content')
<title>ToletX-Building</title>


<header class="mt-4">
    <div class="container-fluid">
        <div class="row main-search">

        </div>
        <div class="row row1">
            <div class="col-md-12  ">
                <div class="row  ">
                    <div class="col-md-2 col-small mx-2 main-service text-center single_box" onclick="location.href='{{route('building')}}'">
                        <span class="icon-building service_item"></span>
                        <br>
                        <span class="service_item_name"> Building</span>
                    </div>
                </div>
                <div class="row   ">
                    <div class="container container-fluid">
                        <form class="form-horizontal top-form" role="form">
                            <div class="row justify-content-center">
                             @include('frontend.include.primary_search')
                            </div>
                            <!-- Checkbox filters -->
                            <div class="mt-3">

                                <div class="form-check form-check-inline ml-3">
                                    <input class="form-check-input" type="checkbox" id="hot_water" value="hot_water">
                                    <label class="form-check-label checkboxes-label" for="hot_water">Hot Water</label>
                                </div>
                                <div class="form-check form-check-inline ml-3">
                                    <input class="form-check-input" type="checkbox" id="ac" value="ac">
                                    <label class="form-check-label checkboxes-label" for="ac">A.C</label>
                                </div>
                                <div class="form-check form-check-inline ml-3">
                                    <input class="form-check-input" type="checkbox" id="wifi" value="wifi">
                                    <label class="form-check-label checkboxes-label" for="wifi">Wifi</label>
                                </div>
                                <div class="form-check form-check-inline ml-3">
                                    <input class="form-check-input" type="checkbox" id="laundry" value="laundry">
                                    <label class="form-check-label checkboxes-label" for="laundry">Laundry</label>
                                </div>


                                <div class="form-check form-check-inline ml-3">
                                    <input class="form-check-input" type="checkbox" id="lift" value="lift">
                                    <label class="form-check-label checkboxes-label" for="lift">Lift</label>
                                </div>
                                <div class="form-check form-check-inline ml-3">
                                    <input class="form-check-input" type="checkbox" id="furnished" value="furnished">
                                    <label class="form-check-label checkboxes-label" for="furnished">Furnished</label>
                                </div>
                            </div>
                            <div class="mt-3">
                                <div class="form-check form-check-inline ml-3">
                                    <input class="form-check-input" type="checkbox" id="cctv" value="cctv">
                                    <label class="form-check-label checkboxes-label" for="cctv">CCTV</label>
                                </div>
                                <div class="form-check form-check-inline ml-3">
                                    <input class="form-check-input" type="checkbox" id="security" value="security">
                                    <label class="form-check-label checkboxes-label" for="security">Security</label>
                                </div>
                                <div class="form-check form-check-inline ml-3">
                                    <input class="form-check-input" type="checkbox" id="parking" value="parking">
                                    <label class="form-check-label checkboxes-label" for="parking">Parking</label>
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

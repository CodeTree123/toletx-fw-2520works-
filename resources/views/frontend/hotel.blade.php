@extends('frontend.master.master')
@section('content')
<title>ToletX-Hotel</title>

<!-- Header Start -->
<header class="mt-4">
    <div class="container-fluid">
        <div class="row main-search">

        </div>
        <div class="row row1">
            <div class="col-md-12">
                <div class="row  ">
                    <div class="col-md-2 col-small mx-2 main-service text-center single_box" onclick="location.href='{{route('hotel')}}'">
                        <span class="icon-hotel service_item"></span>
                        <br>
                        <span class="service_item_name"> Hotel</span>
                    </div>
                </div>
                <div class="row ml-1 mr-4 ">
                    <div class="container container-fluid">
                        <form class="form-horizontal top-form" action="{{route('hotel_search')}}" role="form">
                            <div class="row justify-content-center">
                              
                             @include('frontend.include.primary_search')
                            </div>
                            <!-- Checkbox filters -->
                            <div class="mt-3">
                                <div class="form-check form-check-inline ml-3">
                                    <input class="form-check-input" type="checkbox" name="bathroom" id="bathroom" value="Bathroom">
                                    <label class="form-check-label checkboxes-label" for="attached_toilet">Bath room</label>
                                </div>
                                <div class="form-check form-check-inline ml-3">
                                    <input class="form-check-input" type="checkbox" name="security" id="security" value="Attached">
                                    <label class="form-check-label checkboxes-label" for="attached_veranda">Security</label>
                                </div>
                                <div class="form-check form-check-inline ml-3">
                                    <input class="form-check-input" type="checkbox" name="cctv" id="hot_water" value="cctv">
                                    <label class="form-check-label checkboxes-label" for="hot_water">CC TV</label>
                                </div>

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
                                        <input class="form-check-input" type="checkbox" name="furnished" id="furnished" value="furnished">
                                        <label class="form-check-label checkboxes-label" for="furnished">Furnished</label>
                                    </div>

                                    <div class="form-check form-check-inline ml-3">
                                        <input class="form-check-input" type="checkbox" name="parking" id="parking" value="parking">
                                        <label class="form-check-label checkboxes-label" for="parking">Parking</label>
                                    </div>

                                    <div class="mt-3">

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




<!-- Enable tooltop -->
<script>
    $(function() {
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>

@endsection

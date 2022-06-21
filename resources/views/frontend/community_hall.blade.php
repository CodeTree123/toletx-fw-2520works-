@extends('frontend.master.master')
@section('content')

<title>ToletX-Community Hall</title>

<!-- Header Start -->
<header class="mt-4">
    <div class="container-fluid">
        <div class="row main-search">

        </div>
        <div class="row row1">
            <div class="col-md-12">
                <div class="row  ">
                    <div class="col-md-2 col-small mx-2 main-service text-center single_box" onclick="location.href='{{route('community_hall')}}'">
                        <span class="icon-community_hall service_item"></span>
                        <br>
                        <span class="service_item_name"> Community Hall</span>
                    </div>
                </div>
                <div class="row ml-1 mr-4 ">
                    <div class="container container-fluid">
                        <form class="form-horizontal top-form" action="{{route('community_search')}}" method="get" role="form">
                            <div class="row justify-content-center">
                            
                            @include('frontend.include.primary_search')
                            </div>
                            <!-- Checkbox filters -->
                            <div class="mt-3">

                                <div class="form-check form-check-inline ml-3">
                                    <input class="form-check-input" type="checkbox" id="ac" value="ac">
                                    <label class="form-check-label checkboxes-label" for="ac">A.C</label>
                                </div>
                                <div class="form-check form-check-inline ml-3">
                                    <input class="form-check-input" type="checkbox" id="wifi" value="wifi">
                                    <label class="form-check-label checkboxes-label" for="wifi">Wifi</label>
                                </div>
                                <div class="form-check form-check-inline ml-3">
                                    <input class="form-check-input" type="checkbox" id="individual" value="individual">
                                    <label class="form-check-label checkboxes-label" for="individual">Individual</label>
                                </div>
                                <div class="form-check form-check-inline ml-3">
                                    <input class="form-check-input" type="checkbox" id="shopping_complex" value="shopping_complex">
                                    <label class="form-check-label checkboxes-label" for="shopping_complex">Shopping Complex</label>
                                </div>
                                <div class="mt-3">

                                    <div class="form-check form-check-inline ml-3">
                                        <input class="form-check-input" type="checkbox" id="lift" value="lift">
                                        <label class="form-check-label checkboxes-label" for="lift">Lift</label>
                                    </div>
                                    <div class="form-check form-check-inline ml-3">
                                        <input class="form-check-input" type="checkbox" id="furnished" value="furnished">
                                        <label class="form-check-label checkboxes-label" for="furnished">Furnished</label>
                                    </div>

                                    <div class="form-check form-check-inline ml-3">
                                        <input class="form-check-input" type="checkbox" id="parking" value="parking">
                                        <label class="form-check-label checkboxes-label" for="parking">Parking</label>
                                    </div>
                                    <div class="form-check form-check-inline ml-3">
                                        <input class="form-check-input" type="checkbox" id="garden" value="garden">
                                        <label class="form-check-label checkboxes-label" for="garden">Garden</label>
                                    </div>

                                    <div class="mt-3">

                                        <div class="form-check form-check-inline ml-3">
                                            <input class="form-check-input" type="checkbox" id="fire_safety" value="fire_safety">
                                            <label class="form-check-label checkboxes-label" for="fire_safety">Fire Safety</label>
                                        </div>
                                        <div class="form-check form-check-inline ml-3">
                                            <input class="form-check-input" type="checkbox" id="emergency_stair" value="emergency_stair">
                                            <label class="form-check-label checkboxes-label" for="emergency_stair">Emergency Stair </label>
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

<!-- Section Start -->



@endsection

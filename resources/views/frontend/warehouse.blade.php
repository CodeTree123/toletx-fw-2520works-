@extends('frontend.master.master')
@section('content')
<title>ToletX-Warehouse</title>

<!-- Header Start -->
<header class="mt-4">
    <div class="container-fluid">
        <div class="row main-search">

        </div>
        <div class="row row1">
            <div class="col-md-12">
                <div class="row  ">
                    <div class="col-md-2 col-small mx-2 main-service text-center single_box" onclick="location.href='{{route('warehouse')}}'">
                        <span class="icon-warehouse service_item"></span>
                        <br>
                        <span class="service_item_name"> Warehouse</span>
                    </div>
                </div>
                <div class="row ml-1 mr-4 ">
                    <div class="container container-fluid">
                        <form class="form-horizontal top-form" action="{{route('warehouse_search')}}" method="get" role="form">
                            <div class="row justify-content-center">
                               
                             @include('frontend.include.primary_search')
                            </div>
                            <!-- Checkbox filters -->
                            <div class="mt-3">

                                <div class="form-check form-check-inline ml-3">
                                    <input class="form-check-input" type="checkbox" name="ac" id="ac" value="ac">
                                    <label class="form-check-label checkboxes-label" for="ac">A.C</label>
                                </div>

                                <div class="form-check form-check-inline ml-3">
                                    <input class="form-check-input" type="checkbox" name="interior_condition" id="running_condition" value="running_condition">
                                    <label class="form-check-label checkboxes-label" for="running_condition">Running Condition </label>
                                </div>
                                <div class="form-check form-check-inline ml-3">
                                    <input class="form-check-input" type="checkbox" name="drainage_system" id="drainage_system" value="drainage_system">
                                    <label class="form-check-label checkboxes-label" for="drainage_system">Drainage System</label>
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
                                    <div class="mt-3">

                                        <div class="form-check form-check-inline ml-3">
                                            <input class="form-check-input" type="checkbox" name="fire_safety" id="fire_safety" value="fire_safety">
                                            <label class="form-check-label checkboxes-label" for="fire_safety">Fire Safety</label>
                                        </div>
                                        <div class="form-check form-check-inline ml-3">
                                            <input class="form-check-input" type="checkbox" name="" id="emergency_stair" value="emergency_stair">
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




<!-- Option 2: Separate Popper and Bootstrap JS -->


@endsection

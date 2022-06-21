@extends('frontend.master.master')
@section('content')

<header class="">
    <div class="container-fluid">
        <div class="row main-search">

        </div> 
            <div class="col-md-12 mx-4">
                <div class="row  ">
<div class="col-md-2 col-small mx-2 main-service text-center single_box" onclick="location.href='{{route('room')}}'">
                        <span class="icon-room service_item"></span>
                        <br>
                        <span class="service_item_name"> Room</span>
                    </div>
                </div>
                <div class="row   "> 
                        <form class="form-horizontal top-form" action="{{route('room_search')}}" role="form">
                            <div class="row  ">
                            @include('frontend.include.primary_search')
                          
                            </div>
                            <!-- Checkbox filters -->
                            <div class="mt-3">
                                <div class="form-check form-check-inline ml-3">
                                    <input class="form-check-input" type="checkbox" name="attached_toilet" id="attached_toilet" value="Attached">
                                    <label class="form-check-label checkboxes-label" for="attached_toilet">Attached Toilet</label>
                                </div>
                                <div class="form-check form-check-inline ml-3">
                                    <input class="form-check-input" type="checkbox" name="attached_varanda" id="attached_veranda" value="Attached">
                                    <label class="form-check-label checkboxes-label" for="attached_veranda">Attached Veranda</label>
                                </div>
                                <div class="form-check form-check-inline ml-3">
                                    <input class="form-check-input" type="checkbox" name="hot_water" id="hot_water" value="hot">
                                    <label class="form-check-label checkboxes-label" for="hot_water">Hot Water</label>
                                </div>
                                <div class="form-check form-check-inline ml-3">
                                    <input class="form-check-input" type="checkbox" name="ac" id="ac" value="ac">
                                    <label class="form-check-label checkboxes-label" for="ac">A.C</label>
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
                                        <input class="form-check-input" type="checkbox" name="lift" id="lift" value="lift">
                                        <label class="form-check-label checkboxes-label" for="lift">Lift</label>
                                    </div>
                                    <div class="form-check form-check-inline ml-3">
                                        <input class="form-check-input" type="checkbox" name="furnished" id="furnished" value="furnished">
                                        <label class="form-check-label checkboxes-label" for="furnished">Furnished</label>
                                    </div>
                                    <div class="form-check form-check-inline ml-3">
                                        <input class="form-check-input" type="checkbox" name="cable_tv" id="cableTv" value="cable">
                                        <label class="form-check-label checkboxes-label" for="cableTv">Cable TV</label>
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
</header>
<!-- Header End -->

@endsection

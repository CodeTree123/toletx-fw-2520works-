@extends('frontend.master.master')
@section('content')
<title>ToletX-Billboard</title>

<header class="mt-4">
    <div class="container-fluid">
        <div class="row main-search">

        </div>
        <div class="row row1">
            <div class="col-md-12 mx-4">
                <div class="row ">
                    <div class="col-md-2 col-small mx-2 main-service text-center single_box" onclick="location.href='{{route('bilboard')}}'">
                        <span class="icon-bilboard service_item"></span>
                        <br>
                        <span class="service_item_name"> Bilboard</span>
                    </div>
                </div>
                <div class="row ml-1 mr-4 ">
                    <div class="container container-fluid">
                        <form class="form-horizontal top-form" action="{{route('bilboard_search')}}" role="form">
                            <div class="row justify-content-center">
                             @include('frontend.include.primary_search')
                            </div>
                            <!-- Checkbox filters -->
                            <div class="mt-3">
                                <div class="form-check form-check-inline ml-3">
                                    <input class="form-check-input" type="checkbox" name="electricity" id="electric" value="electric">
                                    <label class="form-check-label checkboxes-label" for="electric">Electric </label>
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

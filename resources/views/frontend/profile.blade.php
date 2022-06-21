@extends('frontend.master.master')
@section('content')
<title>Profile</title>

<!-- Header Start -->
<header class="mt-4">
    <div class="container-fluid">
        <div class="row main-search">
        </div>
        <div class="row">
            <div class="col-md-12 ">

                <ul class="nav nav-tabs " id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">My
                            Information</button>
                    </li>

                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Payment
                            Information</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="customer_need-tab" data-bs-toggle="tab" data-bs-target="#customer_need" type="button" role="tab" aria-controls="customer_need" aria-selected="false">Customer Advertise
                        </button>
                    </li>

                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane mt-2 fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="row">
                            <div class="col-md-6 ">
                                <div class="p-3 py-5">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <h4 class="text-right">Profile Information</h4>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-md-12">
                                            <label class="labels">
                                                <i class="icofont-hotel-boy"></i>
                                                <span class="info-type">Name : </span>
                                                <span class="info">Jamal Gazi</span>
                                            </label>
                                        </div>
                                        <div class="col-md-12">
                                            <label class="labels">
                                                <i class="icofont-user-male"></i>
                                                <span class="info-type">Father's Name :</span>
                                                <span class="info">Korim Gazi</span>
                                            </label>
                                        </div>
                                        <div class="col-md-12">
                                            <label class="labels">
                                                <i class="icofont-user-female"></i>

                                                <span class="info-type">Mothers's Name :</span>
                                                <span class="info">Nurjahan Begum</span>

                                            </label>
                                        </div>
                                        <div class="col-md-12">
                                            <label class="labels">
                                                <i class="icofont-phone"></i>
                                                <span class="info-type">Phone Number :</span>
                                                <span class="info">017000000001</span>
                                            </label>
                                        </div>
                                        <div class="col-md-12">
                                            <label class="labels">
                                                <i class="icofont-ui-calendar"></i>
                                                <span class="info-type">Date of Birth :</span>
                                                <span class="info">01/01/2005</span>
                                            </label>
                                        </div>
                                        <div class="col-md-12 ml-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                                <label class="form-check-label" for="flexCheckChecked">
                                                    Make Profile Picture Private
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane mt-2 fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                        <div class="p-3 py-5">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h4 class="text-right">Payment Information</h4>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-12">
                                    <label class="labels">
                                        <i class="icofont-hotel-boy"></i>
                                        <span class="info-type">Name : </span>
                                        <span class="info">Jamal</span>
                                    </label>
                                </div>
                                <div class="col-md-12">
                                    <label class="labels">
                                        <i class="icofont-user-male"></i>
                                        <span class="info-type">Father's Name :</span>
                                        <span class="info">Korim Gazi</span>
                                    </label>
                                </div>
                                <div class="col-md-12">
                                    <label class="labels">
                                        <i class="icofont-user-female"></i>

                                        <span class="info-type">Mothers's Name :</span>
                                        <span class="info">Nurjahan Begum</span>

                                    </label>
                                </div>
                                <div class="col-md-12">
                                    <label class="labels">
                                        <i class="icofont-phone"></i>
                                        <span class="info-type">Phone Number :</span>
                                        <span class="info">0152000000001</span>
                                    </label>
                                </div>
                                <div class="col-md-12">
                                    <label class="labels">
                                        <i class="icofont-ui-calendar"></i>
                                        <span class="info-type">Date of Birth :</span>
                                        <span class="info">01/01/2001</span>
                                    </label>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="tab-pane mt-2 fade" id="customer_need" role="tabpanel" aria-labelledby="customer_need-tab">


                        <div class="row mt-2 "> 

                            <div class="list-group">
                                <span href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
                                <span class="badge bg-warning text-dark">Pending</span>
                                    <div class="d-flex gap-2 w-100 justify-content-between">
                                        <div>
                                            <h6 class="mb-0">List group item heading</h6>
                                            <p class="mb-0 opacity-75">Some placeholder content in a paragraph.</p>
                                        </div>
                                        <small class="opacity-50 text-nowrap">now</small>
                                    </div>
                                </span>
                                <span href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
                                 
                                <span class="badge bg-success">Approved</span>
                                    <div class="d-flex gap-2 w-100 justify-content-between">
                                        <div>
                                            <h6 class="mb-0">Another title here</h6>
                                            <p class="mb-0 opacity-75">Some placeholder content in a paragraph that goes a little longer so it wraps to a new line.</p>
                                        </div>
                                        <small class="opacity-50 text-nowrap">3d</small>
                                    </div>
                                </span>
                                <span href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
                                <span class="badge bg-success">Approved</span>
                                    <div class="d-flex gap-2 w-100 justify-content-between">
                                        <div>
                                            <h6 class="mb-0">Third heading</h6>
                                            <p class="mb-0 opacity-75">Some placeholder content in a paragraph.</p>
                                        </div>
                                        <small class="opacity-50 text-nowrap">1a</small>
                                    </div>
                                </span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>


</header>
<!-- Header End -->


<!-- Option 2: Separate Popper and Bootstrap JS -->




<!-- Enable tooltop -->
<script>
    $(function() {
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>
@endsection

 <!DOCTYPE html>
 <html>
 <head>
 	<!-- Basic Page Info -->
 	<meta charset="utf-8">
 	<title>ToletX</title>

 @include('Dashboard.css.css')
 </head>
 <body>
   @include('frontend.header')

 	<div class="mobile-menu-overlay"></div>

 	<div class="container">
 		<div class="pd-ltr-20 xs-pd-20-10">
 			<div class="min-height-200px">
 				<div class="page-header">
 					<div class="row">
 						<div class="col-md-6 col-sm-12">
 							<div class="title">
 								<h4>Billboard</h4>
 							</div>
 							<nav aria-label="breadcrumb" role="navigation">
 								<ol class="breadcrumb">
 									<li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
 									<li class="breadcrumb-item active" aria-current="page">Add Billboard </li>
 								</ol>
 							</nav>
 						</div>

 					</div>
 				</div>
 				<!-- Default Basic Forms Start -->
 				<div class="pd-20 card-box mb-30">
 					<div class="clearfix">
 						<div class="pull-left">
 							<h4 class="text-blue h4">Fillup the Input Fields</h4>
 							<p class="mb-30">Adding Billboard Details</p>
 						</div>

 					</div>
 					@if ($message = Session::get('success'))
 												<div class="alert alert-success alert-block">
 														<button type="button" class="close" data-dismiss="alert">×</button>
 																<strong>{{ $message }}</strong>
 												</div>
 												@endif

 												@if (count($errors) > 0)
 														<div class="alert alert-danger">
 																<strong>Whoops!</strong> There were some problems with your input.
 																<ul>
 																		@foreach ($errors->all() as $error)
 																				<li>{{ $error }}</li>
 																		@endforeach
 																</ul>
 														</div>
 												@endif
 					<form method="POST" action="{{ route('post_bilboard_information') }}" enctype="multipart/form-data">
 						@csrf
            <div class="col-md-6">
                <input id="user_id" type="hidden" class="form-control @error('user_id') is-invalid @enderror" name="user_id" value="{{ Auth::user()->id }}" required autocomplete="user_id" autofocus>

                @error('user_id')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group row">
              <label class="col-sm-12 col-md-2 col-form-label">Post Type</label>
              <div class="col-sm-12 col-md-10">
                <select class="custom-select col-12" name="post_type">
                  <option selected="">Choose...</option>
                  <option value="Wanted">Wanted</option>
                  <option value="Rented">Rented</option>
                </select>
              </div>
            </div>
            <div class="form-group row">
 							<label class="col-sm-12 col-md-2 col-form-label">Address</label>
 							<div class="col-sm-12 col-md-10">
 								<input class="form-control" name="address" placeholder="Location" type="text">
 							</div>
 						</div>
             <div class="form-group row">
 							<label class="col-sm-12 col-md-2 col-form-label">Price</label>
 							<div class="col-sm-12 col-md-10">
 								<input class="form-control" name="price" placeholder="Price" type="numeric">
 							</div>
 						</div>
             <div class="form-group row">
               <label class="col-sm-12 col-md-2 col-form-label">Type</label>
               <div class="col-sm-12 col-md-10">
                 <select class="custom-select col-12" name="type">
                   <option selected="">Choose...</option>
                   <option value="bulletin">bulletin</option>
                   <option value="painted">painted</option>
                   <option value="Mobile">Mobile</option>
                   <option value="classic">classic</option>
                 </select>
               </div>
             </div>

             <div class="form-group row">
               <label class="col-sm-12 col-md-2 col-form-label">Size</label>
               <div class="col-sm-12 col-md-10">
                 <select class="custom-select col-12" name="size">
                   <option selected="">Choose...</option>
                   <option value="24sqr">24sqr</option>
                   <option value="36sqr">36sqr</option>
                   <option value="18sqr">18sqr</option>
                 </select>
               </div>
             </div>

             <div class="form-group row">
               <label class="col-sm-12 col-md-2 col-form-label">Hieght</label>
               <div class="col-sm-12 col-md-10">
                 <select class="custom-select col-12" name="hieght">
                   <option selected="">Choose...</option>
                   <option value="19">19</option>
                   <option value="16">16</option>
                   <option value="30">30</option>
                 </select>
               </div>
             </div>


             <div class="form-group">
               <div class="row">
                 <div class="col-md-6 col-sm-12">
                   <label class="weight-600">Availibility</label>
                   <div class="custom-control custom-checkbox mb-5">
                     <input type="checkbox" name="electricity" value="Electricity" class="custom-control-input" id="customCheck1">
                     <label class="custom-control-label" for="customCheck1">Electricity</label>
                   </div>

                 </div>
               </div>
             </div>
             <div class="form-group">
 							<label>Photo</label>
 							<div class="custom-file">
 								<input type="file" name="photo" value="" class="custom-file-input">
 								<label class="custom-file-label">Choose file</label>
 							</div>
 						</div>
 						<button class="btn btn-primary" type="submit">Submit</button>



 					</form>

 				</div>
 				<!-- Default Basic Forms End -->



 			<div class="collapse collapse-box" id="form-grid-form" >

 			<div class="footer-wrap pd-20 mb-20 card-box">
 				toletx By <a href="https://github.com/dropways" target="_blank">Codetree</a>
 			</div>
 		</div>
 	</div>
 	<!-- js -->
 	<script src="{{asset('Dashboard/vendors/scripts/core.js')}}"></script>
 	<script src="{{asset('Dashboard/vendors/scripts/script.min.js')}}"></script>
 	<script src="{{asset('Dashboard/vendors/scripts/process.js')}}"></script>
 	<script src="{{asset('Dashboard/vendors/scripts/layout-settings.js')}}"></script>
 </body>
 </html>

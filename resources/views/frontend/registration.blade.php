 

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="{{asset('Frontend/assets/img/header/favicon_io/android-chrome-192x192.png')}}">

    <!-- Bootstrap CSS -->
    <link href='https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css' rel='stylesheet'>

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="{{asset('Frontend/assets/img/header/TOLETX-LOGO-2.ai')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

     
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="crossorigin="anonymous"referrerpolicy="no-referrer"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--Custom CSS for header  -->

    <link rel="stylesheet" href="{{asset('Frontend/assets/css/icon.css')}}">
    <link rel="stylesheet" href="{{asset('Frontend/assets/css/lite.css')}}">
    <link rel="stylesheet" href="{{asset('Frontend/assets/css/dark.css')}}">
    <link rel="stylesheet" href="{{asset('Frontend/assets/css/responsive.css')}}">
    <!-- jQuery CDN -->

     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
 

     
     <script>
        // Render blocking JS:
        if (localStorage.theme) document.documentElement.setAttribute("data-theme", localStorage.theme);
    </script>


   <title>Toletx-Registration</title>
 </head>
 
 <body>
 @include('frontend.include.header')

   <!-- Section Start -->
   <section class="pt-5 pb-5">
     <div class="container">
       <div class="row regirstration-row">
         <div class="container-fluid" id=" ">
           <div class="row justify-content-center mt-0">
             <div class="registration-form-card-body col-11 col-sm-9 col-md-7 col-lg-6 text-center p-0 mt-3 mb-2">
               <div class="registration-form-card card px-0 pt-4 pb-0 mt-3 mb-3">
                 <h2><strong>Sign Up Your User Account</strong></h2>
                 <p>Fill all form field to go to next step</p>
                 <div class="row">
                   <div class="col-md-12 mx-0">
                   <form method="POST" class="needs-validation"   action="{{ route('newregister') }}" id="msform" enctype="multipart/form-data" novalidate>
                       @csrf
                       <!-- progressbar -->
                       <ul class=" d-flex justify-content-between" id="progressbar">
                         <li class="active" id="account">
                           <strong>Account</strong>
                         </li>
                         <li id="personal"><strong>Personal</strong></li>
                         <li id="confirm"><strong>Finish</strong></li>
                       </ul>
                       <!-- fieldsets -->
                       <fieldset>
                         <div class="form-card reg-card">
                           <div class="col-md-12">
                             <label for="userName" class="form-label">User Name</label>
                             <input type="text" name="name" class="form-control msform"  id="userName" required >
                           </div>
                           <div class="col-md-12">
                             <label for="phone" class="form-label">Phone No.</label>
                             <input type="tel" name="phone" class="form-control msform" id="phone" required>
                           </div>
                           <div class="col-md-12">
                             <label for="email" class="form-label">Email</label>
                             <input type="email" name="email" class="form-control msform" id="email" required>
                           </div>
                           <div class="col-md-12">
                             <div class="input-group mb-3">
                              <div class="custom-file">
                                <label class="custom-file-label" for="profilePicture">Add Profile Picture</label>
                                  <br>
                                <input type="file" name="n_photo" class="custom-file-input" id="profilePicture" required>
                              </div>
                            </div>
                           </div>

                           <div class="col-md-12">
                             <label for="password" class="form-label">Password</label>
                             <input type="password" name="password" class="form-control msform" id="password" required>
                           </div>
                           <div class="col-md-12">
                             <label for="confirmPassword" class="form-label">Confirm Password</label>
                             <input type="password" name="password_confirmation" class="form-control msform msform" id="confirmPassword" required>
                           </div>




                         </div>
                         <input type="button" name="next" class="next action-button" value="Next Step" id="firstFieldset"  onclick="firstFieldsetValidation()" />
                       </fieldset>
                       <fieldset>
                         <div class="form-card reg-card">
                           <h2 class="fs-title">Personal Information</h2>

                           <div class="col-12">
                             <label for="fName" class="form-label">Father's Name</label>
                             <input type="text" name="father_name" class="form-control msform" id="fName" placeholder="" required>
                           </div>
                           <div class="col-12">
                             <label for="mName" class="form-label">Mother's Name</label>
                             <input type="text" name="mother_name" class="form-control msform" id="mName" placeholder="" required>
                           </div>
                           <div class="col-12">
                             <label for="mName" class="form-label">Date of Birth</label>
                           <input class="msform" name="date_of_birth" type="date" name="dob" placeholder=" "  required/>
                           </div>
                           <div class="col-12">
                             <label for="address" class="form-label">Address</label>
                           <input class="msform" name="address" id="address" type="text" name="address" required/>
                           </div>
                           <div class="col-md-12">
                             <label for="nationality" class="form-label">Nationality</label>
                             <input type="text" name="nationality" class="form-control msform" id="nationality" required>
                           </div>
                           <div class="col-md-12">
                             <label for="inputGender" class="form-label">Gender</label>
                             <select id="inputGender" name="gender" class="form-select msform" required>
                               <option selected>Gender</option>
                               <option value="Male">Male</option>
                               <option value="Female"> Female</option>
                               <option value="Other"> Other</option>
                             </select>
                           </div>
                           <div class="col-md-12 mt-2">
                             <label for="inputFavQuestion" class="form-label">Choose Security Question</label>
                             <select id="inputFavQuestion" name="security_question" class="form-select msform" required>
                               <option selected>Choose Security Question</option>
                               <option value="favourite_color">Your Favourite Color?</option>
                               <option value="favourite_pet"> Your Favourite Pet?</option>
                               <option value="favourite_place"> Your Favourite Place?</option>
                             </select> 
                           </div>  
                           <div class="col-md-12 mt-2">
                             <label for="favourite_ans" class="form-label">Type Your Answer</label>
                             <input type="text" name="favourite_ans" class="form-control msform" id="favourite_ans" required>
                           </div>



                           <div class="col-12  mt-3 mb-3">
                              <div class="custom-file" data-toggle="tooltip" data-placement="top" title="Upload Scanned Copy of your Birth Certificate/NID/Driving License/Passport">
                                <label class="custom-file-label" for="inputGroupFile03">Add Photo ID</label>
                                <input type="file" name="photo" class="custom-file-input" id="inputGroupFile03" required>
                              </div>
                           </div>
                           <div class="col-12 pl-3">
                             <div class="form-check">
                               <input class="form-check-input  ml-1 mr-1" type="checkbox" id="gridCheck" required>
                               <label class="form-check-label" for="gridCheck">
                                 Agree to our <a href="#">terms & conditions</a>
                               </label>
                             </div>
                           </div>
                         </div>
                         <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                         <input type="submit" name="next" class="next action-button" value="Next Step" id="secondFieldset"  />
                       </fieldset>

                       <fieldset>
                         <div class="form-card reg-card">
                           <h2 class="fs-title text-center">Success !</h2>
                           <br /><br />
                           <div class="row justify-content-center">
                             <div class="col-3">
                               <img src="https://img.icons8.com/color/96/000000/ok--v2.png" class="fit-image" />
                             </div>
                           </div>
                           <br /><br />
                           <div class="row justify-content-center">
                             <div class="col-7 text-center">
                               <h5>You Have Successfully Signed Up</h5>
                             </div>
                           </div>
                         </div>
                       </fieldset>
                     </form>
                   </div>
                 </div>
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>
   </section>
   <!-- Section End -->

   @include('frontend.include.footer')

   <!-- Option 2: Separate Popper and Bootstrap JS -->


   <script src="{{asset('Frontend/assets/js/stepper-form.js')}}"></script>

   <script>
     $(function() {
       $('[data-toggle="tooltip"]').tooltip()
     })
   </script>
<script>
   var firstFieldset = document.getElementById("firstFieldset");
   var secondFieldset = document.getElementById("secondFieldset"); 
  //  First Fieldset ID's
  var userName = document.getElementById("userName").value;
  var phone = document.getElementById("phone").value;
  var email = document.getElementById("email").value;
  var profilePicture = document.getElementById("profilePicture").value;
  var password = document.getElementById("password").value;
  var confirmPassword = document.getElementById("confirmPassword").value;
  //  Second Fieldset ID's

  // Check Empty input field
  function firstFieldsetValidation() {
        if( userName == ""  ){ 
           
          alert("khali");
          location.reload(); 
          return false;
          }else{
            alert("vora");
          }
  } 




</script>
 </body>

 </html>

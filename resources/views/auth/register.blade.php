<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <link rel="icon" type="image/png" sizes="16x16" href="plugins/images/favicon.png">
      <title>Cubic Admin Template</title>
      <!-- ===== Bootstrap CSS ===== -->
      <link href="{{ asset('public/assets/backend/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
      <!-- ===== Plugin CSS ===== -->
      <!-- ===== Animation CSS ===== -->
      <link href="{{ asset('public/assets/backend/css/animate.css') }}" rel="stylesheet">
      <!-- ===== Custom CSS ===== -->
      <link href="{{ asset('public/assets/backend/css/style.css') }}" rel="stylesheet">
      <!-- ===== Color CSS ===== -->
      <link href="{{ asset('public/assets/backend/css/colors/default.css') }}" id="theme" rel="stylesheet">
   </head>
   <body class="mini-sidebar">
      <!-- Preloader -->
      <div class="preloader">
         <div class="cssload-speeding-wheel"></div>
      </div>
      <section id="wrapper" class="login-register">
         <div class="login-box" style="margin-top: 25px;">

           <!--  @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif -->

            <div class="white-box">
               <form method="POST" action="{{ route('user.register') }}" class="form-horizontal form-material" id="loginform">
                  @csrf
                  <h3 class="box-title m-b-20">Sign In</h3>
                  <div class="form-group ">
                     <div class="col-xs-12">
                        <input class="form-control" name="name" type="text" placeholder="Name"  value="{{old('name')}}">
                         @error('name')<span class="text-danger">{{ $message }}</span>@enderror
                     </div>
                  </div>
                  <div class="form-group ">
                     <div class="col-xs-12">
                        <input class="form-control" name="email" type="email" placeholder="Email" value="{{old('email')}}">
                         @error('email')<span class="text-danger">{{ $message }}</span>@enderror
                     </div>
                  </div>
                  <div class="form-group ">
                     <div class="col-xs-12">
                        <input class="form-control" name="contact" type="number" placeholder="Type Contact Number" value="{{old('contact')}}">
                         @error('contact')<span class="text-danger">{{ $message }}</span>@enderror
                     </div>
                  </div>
                  <div class="form-group ">
                     <div class="col-xs-12">
                        <input class="form-control" name="date_of_birth" type="date" placeholder="Date of Birth" value="{{old('date_of_birth')}}">
                         @error('contact')<span class="text-danger">{{ $message }}</span>@enderror
                     </div>
                  </div>
                  <div class="form-group ">
                     <div class="col-xs-12">
                        <input class="form-control" name="password" type="password" placeholder="Password" value="{{old('password')}}">
                        @error('password')<span class="text-danger">{{ $message }}</span>@enderror
                     </div>
                  </div>
                  <div class="form-group">
                     <div class="col-xs-12">
                        <input class="form-control" name="password_confirmation" type="password" placeholder="Confirm Password" value="{{old('password_confirmation')}}">
                        @error('password_confirmation')<span class="text-danger">{{ $message }}</span>@enderror
                     </div>
                  </div>
                  <div class="form-group">
                     <div class="col-md-12">
                        <div class="checkbox checkbox-primary p-t-0">
                           <input id="checkbox-signup" name="agree_term" value="1" type="checkbox">
                           <label for="checkbox-signup"> I agree to all <a href="#">Terms</a></label><br>
                            @error('agree_term')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                     </div>
                  </div>
                  <div class="form-group text-center m-t-20">
                     <div class="col-xs-12">
                        <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Sign Up</button>
                     </div>
                  </div>
                  <div class="form-group m-b-0">
                     <div class="col-sm-12 text-center">
                        <p>Already have an account? <a href="login" class="text-primary m-l-5"><b>Sign In</b></a></p>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </section>
      <!-- jQuery -->
      <script src="{{ asset('public/assets/backend/plugins/components/jquery/dist/jquery.min.js') }}"></script>
      <!-- Bootstrap Core JavaScript -->
      <script src="{{ asset('public/assets/backend/bootstrap/dist/js/bootstrap.min.js') }}"></script>
      <!-- Menu Plugin JavaScript -->
      <script src="{{ asset('public/assets/backend/js/sidebarmenu.js') }}"></script>
      <!--slimscroll JavaScript -->
      <script src="{{ asset('public/assets/backend/js/jquery.slimscroll.js') }}"></script>
      <!--Wave Effects -->
      <script src="{{ asset('public/assets/backend/js/waves.js') }}"></script>
      <!-- Custom Theme JavaScript -->
      <script src="{{ asset('public/assets/backend/js/custom.js') }}"></script>
      <!--Style Switcher -->
      <script src="{{ asset('public/assets/backend/plugins/components/styleswitcher/jQuery.style.switcher.js') }}"></script>
   </body>
</html>
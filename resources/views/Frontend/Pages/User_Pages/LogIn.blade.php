<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <meta content="Codescandy" name="author" />
      <title>Sign in eCommerce HTML Template - FreshCart</title>
      <!-- Favicon icon-->
      <link rel="shortcut icon" type="image/x-icon" href="https://freshcart.codescandy.com/assets/images/favicon/favicon.ico" />

      <!-- Libs CSS -->
      <link href="https://freshcart.codescandy.com/assets/libs/bootstrap-icons/font/bootstrap-icons.min.css" rel="stylesheet" />
      <link href="https://freshcart.codescandy.com/assets/libs/feather-webfont/dist/feather-icons.css" rel="stylesheet" />
      <link href="https://freshcart.codescandy.com/assets/libs/simplebar/dist/simplebar.min.css" rel="stylesheet" />

      <!-- Theme CSS -->
      <link rel="stylesheet" href="https://freshcart.codescandy.com/assets/css/theme.min.css" />
      <script async src="https://www.googletagmanager.com/gtag/js?id=G-M8S4MT3EYG"></script>
      <script>
         window.dataLayer = window.dataLayer || [];
         function gtag() {
            dataLayer.push(arguments);
         }
         gtag("js", new Date());

         gtag("config", "G-M8S4MT3EYG");
      </script>
   </head>

   <body>
      <!-- navigation -->
      <div class="border-bottom shadow-sm">
         <nav class="navbar navbar-light py-2">
            <div class="container justify-content-center justify-content-lg-between">
               <a class="navbar-brand" href="../index.html">
                  <img src="https://freshcart.codescandy.com/assets/images/logo/freshcart-logo.svg" alt="" class="d-inline-block align-text-top" />
               </a>
               <span class="navbar-text">
                  You have no account?
                  <a href="{{route('SignUp')}}">Sign Up</a>
               </span>
            </div>
         </nav>
      </div>

      <main>
         <!-- section -->
         <section class="my-lg-14 my-8">
            <div class="container">
               <!-- row -->
               <div class="row justify-content-center align-items-center">
                  <div class="col-12 col-md-6 col-lg-4 order-lg-1 order-2">
                     <!-- img -->
                     <img src="https://freshcart.codescandy.com/assets/images/svg-graphics/signin-g.svg" alt="" class="img-fluid" />
                  </div>
                  <!-- col -->
                  <div class="col-12 col-md-6 offset-lg-1 col-lg-4 order-lg-2 order-1">
                     <div class="mb-lg-9 mb-5">
                        <h1 class="mb-1 h2 fw-bold">Sign in to FreshCart</h1>
                        <p>Welcome back to FreshCart! Enter your email to get started.</p>
                     </div>

                     <form class="needs-validation" novalidate>
                        <div class="row g-3">
                           <!-- row -->

                           <div class="col-12">
                              <!-- input -->
                              <label for="formSigninEmail" class="form-label visually-hidden">Email address</label>
                              <input type="email" name="email" class="form-control" id="" placeholder="Email" required />
                              <div class="invalid-feedback">Please enter name.</div>
                           </div>
                           <div class="col-12">
                              <!-- input -->
                              <div class="password-field position-relative">
                                 <label for="formSigninPassword" class="form-label visually-hidden">Password</label>
                                 <div class="password-field position-relative">
                                    <input type="password" name="password" class="form-control" id="" placeholder="*****" required />
                                    <span><i class="bi bi-eye-slash passwordToggler"></i></span>
                                    <div class="invalid-feedback">Please enter password.</div>
                                 </div>
                              </div>
                           </div>
                           <div class="d-flex justify-content-between">
                              <!-- form check -->
                              <div class="form-check">
                                 <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                                 <!-- label -->
                                 <label class="form-check-label" for="flexCheckDefault">Remember me</label>
                              </div>
                              <div>
                                 Forgot password?
                                 <a href="#">Reset It</a>
                              </div>
                           </div>
                           <!-- btn -->
                           <div class="col-12 d-grid"><button type="submit" class="btn btn-primary">Sign In</button></div>
                           <!-- link -->
                           <div>
                              Don’t have an account?
                              <a href="{{route('SignUp')}}">Sign Up</a>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </section>
      </main>

     
      <!-- Javascript-->
      <!-- Libs JS -->
      <!-- <script src="../assets/libs/jquery/dist/jquery.min.js"></script> -->
      <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
      <script src="../assets/libs/simplebar/dist/simplebar.min.js"></script>

      <!-- Theme JS -->
      <script src="../assets/js/theme.min.js"></script>

      <script src="../assets/js/vendors/password.js"></script>
      <script src="../assets/js/vendors/validation.js"></script>
   </body>
</html>

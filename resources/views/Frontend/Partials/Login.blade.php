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

                    <form action="{{route('Do_SignIn')}}" method="post">
                        @csrf
                        <div class="row g-3">
                            <!-- row -->

                            <div class="col-12">
                                <!-- input -->
                                <label for="formSigninEmail" class="form-label visually-hidden">Email address</label>
                                <input type="email" name="email" value="{{old('email')}}" class="form-control" id="" placeholder="Email" required />
                                <!-- <div class="invalid-feedback">Please enter name.</div> -->
                                @error('email'){{$message}}@enderror
                            </div>
                            <div class="col-12">
                                <!-- input -->
                                <div class="password-field position-relative">
                                    <label for="formSigninPassword" class="form-label visually-hidden">Password</label>
                                    <div class="password-field position-relative">
                                        <input type="password" name="password" value="{{old('password')}}" class="form-control" id="formSigninPassword" placeholder="*****" required />
                                        <!-- <div class="invalid-feedback">Please enter password.</div> -->
                                        @error('password'){{$message}}@enderror

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

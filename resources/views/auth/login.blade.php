<!DOCTYPE html>
<html lang="en">
<head>
   @include('include.head')
</head>
<body>
   {{-- <div>
    @include('include.header')
   </div> --}}

    <section class="login-view">
     <div class="login-box">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-12">
        <div class="login-box-view">
        <div class="row d-flex align-items-center p-0">
              <div class="col-xl-5 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="img-container" style="max-width:550px;">
                          <img src="{{ asset('images/vector.png') }}" alt="">
                    </div>
              </div>
              <div class="col-xl-7 col-lg-6 col-md-6 col-sm-6 col-12 form-view">
                   <div class="form-content">
                        <h4 class="login-title mb-3">Login</h4>
                   </div>
                   <form action="/booking" method="POST">
                    @csrf
                    <div class="form-group mt-3">
                        <input type="email" class="form-control" name="email" placeholder="Enter Email" required>
                    </div>
                    <div class="form-group mt-3">
                        <input type="password" class="form-control" name="password" placeholder="Enter Password" required>
                    </div>

                       <button type="submit" class="btn ternery-btn btn-block mt-3">Login</button>
                       <div class="slignup-link d-flex justify-content-between mx-2 mt-4">
                          <span class="signup-txt text-white">Not a membrer?</span>
                          <span class="signup-link">
                            <a href="{{ route('register') }}" class="text-grey text-white-50">Signup now</a>
                            </span>
                       </div>
                </form>

              </div>
            </div>
          </div>
        </div>
    </div>
</div>
        </section>

    <div>
        @include('include.script')
    </div>
</body>
</html>

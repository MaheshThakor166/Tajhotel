<!DOCTYPE html>
<html lang="en">

<head>
    @include('include.head')
</head>

<body>
    <section class="booking-view">
        <div class="container">
            <div class="booking-top">
                <h4 class="main-title p-0">Reservation</h4>
                <div class="btn-box">
                    <div class="btn-view">
                        <a href="#" class="home-link">Home</a>
                        <div class="border">/</div>
                        <a href="#" class="home-link">Reservation</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="booking-content">
            <div class="container content-view">
                <div class="sub-title">
                    <div class="bd-content"></div>
                    <p class="content-txt">Booking Hotel</p>
                    <div class="bd-content"></div>
                </div>
                <div class="booking-box">
                    <form action="/booking" method="POST">
                        @csrf
                        <div class="bg-box row">
                        <div class="booking-group col-lg-3 mt-3">
                            <select class="booking-control" required>
                                <option value="" selected hidden>No of Person</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                            </select>
                        </div>
                        <div class="booking-group col-lg-3 mt-3">
                            <select class="booking-control" required>
                                <option value="" selected hidden>No of Children</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                            </select>
                        </div>
                        <div class="booking-group col-lg-3 mt-3">
                            <select class="booking-control" required>
                                <option value="" selected hidden>Select City</option>
                                <option>Ahemdabad</option>
                                <option>Mahesana</option>
                                <option>rajkot</option>
                            </select>
                        </div>

                    <div class="d-flex justify-content-center">
                        <div class="booking-group col-lg-4 mt-3">
                            <span>Check In:</span>
                            <input type="date" class="booking-control" name="password" placeholder="Enter Date"
                                required>
                        </div>
                        <div class="booking-group col-lg-4 mt-3">
                            <span>Check Out:</span>
                            <input type="date" class="booking-control" name="password" placeholder="Enter Date"
                                required>
                        </div>
                    </div>
                        <div class="booking-group col-lg-3 mt-5">
                            <a href="#" class="primary-btn">CHECK AVEBILITY</a>
                        </div>
                    </div>
                        {{-- <button type="submit" class="btn ternery-btn btn-block mt-3">Login</button> --}}
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    @include('include.head')
</head>

<body>
    <div class="booking-container">
        <div class="container p-0">
            <div class="row g-4">
                <!-- Room Details Section -->
                <div class="col-lg-7 col-lg-6 col-md-7 col-sm-12">
                    <div class="room-details">
                        <h2 class="content-txt">Deluxe Room Twin Bed</h2>
                        <div class="dates d-flex my-4">
                            <div class="w-50">
                                <label for="checkin">Check In</label>
                                <p class="adding-data">12-3-24</p>
                            </div>
                            <div class="w-50">
                                <label for="checkout">Check Out</label>
                                <p class="adding-data">12-3-24</p>
                            </div>
                        </div>

                        <!-- Guest Details Section -->
                        <div class="guest-details">
                            <h3 class="content-txt">Guest Details</h3>
                            <div class="d-flex">
                                <input type="text" placeholder="First Name" class="w-50 adding-data" required>
                                <input type="text" placeholder="Last Name" class="w-50 adding-data" required>
                            </div>
                            <div class="adult-child d-flex mt-3">
                                <div class="w-25">
                                    <label for="adult" class="checkin">Adult</label>
                                    <p class="adding-data">4</p>
                                </div>
                                {{-- <select id="adult">
                        <option value="1">1</option>
                        <option value="2">2</option>
                    </select> --}}
                                <div class="w-25">
                                    <label for="child" class="checkin">Child</label>
                                    <p class="adding-data">4</p>
                                </div>
                                {{-- <select id="child">
                        <option value="0">0</option>
                        <option value="1">1</option>
                    </select> --}}
                            </div>
                            <input type="text" placeholder="Special Request" class="adding-data my-3">
                            <label for="arrival" class="checkin">Estimated Arrival Time</label>
                            <select id="arrival" class="adding-data">
                                <option>12:00 pm</option>
                                <option>1:00 pm</option>
                                <!-- More time options -->
                            </select>
                        </div>

                        <!-- Contact Information Section -->
                        <div class="contact-details ">
                            <h3 class="content-txt">Contact Details</h3>
                            {{-- <label>
                    <input type="checkbox" id="booking-for-someone" />
                    I am booking for someone else
                </label> --}}
                            <div class="contact-info">
                                <label for="country-code">Country code</label>
                                <div class="country-code-container">
                                    <select id="country-code" class="adding-data">
                                        <option value="+91">+91</option>

                                        <!-- Add more country codes -->
                                    </select>
                                    {{-- <input type="tel" placeholder="Contact no" required> --}}
                                </div>
                                <input type="email" placeholder="Email" class="adding-data mt-4" required>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Booking Summary Section -->
                <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
                    <div class="booking-summary">
                        <h3 class="content-txt">Booking Details</h3>
                        <p class="checkin fw-bold">Deluxe Room Twin Bed</p>
                        <p class="checkin-data">Check In: <span id="summary-checkin">06 Oct 2024</span></p>
                        <p class="checkin-data">Check Out: <span id="summary-checkout">07 Oct 2024</span></p>
                        <p class="checkin-data">Room: 1</p>
                        <p class="checkin-data">Taxes: <span>INR 300</span></p>
                        <p class="checkin-data">Sub Total: <span>INR 2,800</span></p>
                        <button id="pay-now" class="primary-btn">Pay Now</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div>
        @include('include.script')
    </div>

</body>

</html>

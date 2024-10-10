<!DOCTYPE html>
<html lang="en">

<head>
    @include('include.head')
</head>

<body>x
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
                                <p class="adding-data"><span class="get-room">1</span> Room | <span class="get-person">2</span> Adult |
                                <span class="get-child">3</span>Child <span class="add-btn"><i class="fa-solid fa-plus"></i></span></p>

                                {{-- <div class="w-25">
                                    <label for="adult" class="checkin">Adult</label>
                                    <p class="adding-data">4</p>
                                </div> --}}
                                {{-- <select id="adult">
                        <option value="1">1</option>
                        <option value="2">2</option>
                    </select> --}}
                                {{-- <div class="w-25">
                                    <label for="child" class="checkin">Child</label>
                                    <p class="adding-data">4</p>
                                </div> --}}
                                {{-- <select id="child">
                        <option value="0">0</option>
                        <option value="1">1</option>
                    </select> --}}
                            </div>
                              <!-- Guests Selection -->
                <div class="room-dt">
                              <div id="rooms-container">
                    <div id="totals-row" class="row">
                        <div class="col">Total Rooms: <span id="total-rooms">1</span></div>
                        <div class="col">Total Adults: <span id="total-adults">1</span></div>
                        <div class="col">Total Children: <span id="total-children">0</span></div>
                    </div>

                    <div class="room" data-room="1">
                        <div class="form-group mb-3">
                           <div class="d-flex justify-content-between mb-3">
                            <label>Room 1
                            </label>
                            <a id="add-room" style="cursor: pointer;"><span class="text-dark">Add More Rooms</span> <span style="color: rgb(6, 108, 6);font-size:14px;"><i class="fa-solid fa-plus"></i></span></a>
                        </div>
                            <div class="row">
                                <div class="col">
                                    <label>Adults</label>
                                    <div class="input-group">
                                        <button type="button" class="btn btn-outline-secondary" onclick="decrement(this)">-</button>
                                        <input type="number" class="form-control text-center" name="adults[]" value="1" min="1" max="10" readonly>
                                        <button type="button" class="btn btn-outline-secondary" onclick="increment(this)">+</button>
                                    </div>
                                </div>
                                <div class="col">
                                    <label>Children (0 - 12 yrs)</label>
                                    <div class="input-group">
                                        <button type="button" class="btn btn-outline-secondary" onclick="decrement(this)">-</button>
                                        <input type="number" class="form-control text-center" name="children[]" value="0" min="0" readonly>
                                        <button type="button" class="btn btn-outline-secondary" onclick="increment(this)">+</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                     <!-- Total Rooms, Adults, Children -->

                </div>
                </div>


                <!-- Add More Rooms -->
                            <input type="text" placeholder="Special Request" class="adding-data my-3">
                            <label for="arrival" class="checkin">Estimated Arrival Time</label>
                            <select id="arrival" class="adding-data">
                                <option>12:00 pm</option>
                                <option>1:00 pm</option>
                                <!-- More time options -->
                            </select>
                        </div>

                        <!-- Contact Information Section -->
                        <div class="contact-details">
                            <h3 class="content-txt">Contact Details</h3>
                            {{-- <label>
                    <input type="checkbox" id="booking-for-someone" />
                    I am booking for someone else
                </label> --}}
                            <div class="contact-info">
                                <label for="country-code">Phone number</label>
                                <input type="tel" id="phone" class="adding-data" placeholder="Enter your phone number"
                       pattern="^\d{3}-\d{3}-\d{4}$"
                       title="Phone number format: 123-456-7890" required>
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

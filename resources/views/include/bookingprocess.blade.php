<!--booking process add-->
<section class="bookingstay">
    <div class="container">
     <div class="sub-title">
         <div class="bd-content"></div>
         <p class="content-txt">Booking Stay</p>
         <div class="bd-content"></div>
     </div>

     <div class="row mt-5">
            <div class="col-lg-6">
             <form  action="{{ url('/check-rates') }}" method="POST">
                 @csrf
                 <!-- Date Selection -->
                 <div class="form-group mb-3 row">
                     <div class="col">
                         <label for="check_in" class="form-label">Check In</label>
                         <input type="date" id="check_in" name="check_in" class="form-control">
                     </div>
                     <div class="col">
                         <label for="check_out" class="form-label">Check Out</label>
                         <input type="date" id="check_out" name="check_out" class="form-control">
                     </div>
                 </div>

                 <!-- Guests Selection -->
                 <div id="rooms-container">
                     <div class="room" data-room="1">
                         <div class="form-group mb-3">
                             <label>Room 1</label>
                             <div style="display: none;">
                             <span class="get-child">3</span>Child <span class="add-btn"><i class="fa-solid fa-plus"></i></span></p>
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
                 </div>

                 <!-- Total Rooms, Adults, Children -->
                 <div id="totals-row" class="row">
                     <div class="col">Total Rooms: <span id="total-rooms">1</span></div>
                     <div class="col">Total Adults: <span id="total-adults">1</span></div>
                     <div class="col">Total Children: <span id="total-children">0</span></div>
                 </div>

                 <!-- Add More Rooms -->
                 <a id="add-room">Add More Rooms</a>


                 <!-- Check Rates Button -->
                 <button type="submit" class="primary-btn" id="check-rates-btn">Check Rates</button>
             </form>

            </div>
            <div class="col-lg-6 mt-4">
                <div class="img-container">
                    <img src="{{ asset('images/ff.jpg') }}" alt="booking img">
                </div>
            </div>

     </div>
 </div>
 </section>

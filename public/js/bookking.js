// Select the button using querySelector (since you're targeting a single button)
const toggleBtn = document.querySelector('.add-btn');

//Select the content element
const content = document.querySelector('.room-dt');

//Add a click event listener to the button
toggleBtn.addEventListener('click', () => {
  //Toggle the 'visible' class on the content element
  content.classList.toggle('visible');
});




function increment(button) {
    const input = button.parentElement.querySelector('input');
    let value = parseInt(input.value);
    if (value < 7) {
        input.value = value + 1;
        updateTotals();
    }
}

// Decrement function
function decrement(button) {
    const input = button.parentElement.querySelector('input');
    let value = parseInt(input.value);
    if (value > 1) {
        input.value = value - 1;
        updateTotals();
    }
}

// Add more rooms
document.getElementById('add-room').addEventListener('click', function() {
    const roomCount = document.querySelectorAll('.room').length;
    const newRoomNum = roomCount + 1;
    const roomContainer = document.getElementById('rooms-container');

    const newRoom = document.createElement('div');
    newRoom.classList.add('room');
    newRoom.setAttribute('data-room', newRoomNum);
    newRoom.innerHTML = `
        <button type="button" class="remove-room-btn" onclick="removeRoom(this)">×</button>
        <div class="form-group mb-3">
            <label>Room ${newRoomNum}</label>
            <div class="row">
                <div class="col">
                    <label>Adults</label>
                    <div class="input-group">
                        <button type="button" class="btn btn-outline-secondary" onclick="decrement(this)">-</button>
                        <input type="number" class="form-control text-center" name="adults[]" value="1" min="1" readonly>
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
    `;
    roomContainer.appendChild(newRoom);
    updateTotals();
});



// Remove a room
function removeRoom(button) {
    const room = button.closest('.room');
    room.remove();
    updateTotals();
}

// Update total rooms, adults, and children
function updateTotals() {
    const rooms = document.querySelectorAll('.room').length;
    const adultsInputs = document.querySelectorAll('input[name="adults[]"]');
    const childrenInputs = document.querySelectorAll('input[name="children[]"]');

    let totalAdults = 0;
    let totalChildren = 0;

    adultsInputs.forEach(input => totalAdults += parseInt(input.value));
    childrenInputs.forEach(input => totalChildren += parseInt(input.value));

    document.getElementById('total-rooms').innerText = rooms;
    document.getElementById('total-adults').innerText = totalAdults;
    document.getElementById('total-children').innerText = totalChildren;
}



 // Set minimum date for check-in to today
 const today = new Date().toISOString().split('T')[0];
 document.getElementById("check_in").setAttribute("min", today);

 // Add event listener to check-in date
 document.getElementById("check_in").addEventListener("change", function() {
     const checkInDate = document.getElementById("check_in").value;
     const checkOutInput = document.getElementById("check_out");

     // Set the minimum check-out date to be one day after check-in
     const nextDay = new Date(checkInDate);
     nextDay.setDate(nextDay.getDate() + 1);
     checkOutInput.setAttribute("min", nextDay.toISOString().split('T')[0]);

     // If check-out date is earlier or same as check-in, clear the check-out value
     if (checkOutInput.value <= checkInDate) {
         checkOutInput.value = '';
     }
 });

 // Optional: Prevent form submission if check-in and check-out dates are the same
 document.getElementById("check_out").addEventListener("change", function() {
     const checkInDate = document.getElementById("check_in").value;
     const checkOutDate = document.getElementById("check_out").value;

     if (checkInDate === checkOutDate) {
         alert("Check-out date cannot be the same as check-in date.");
         document.getElementById("check_out").value = ''; // Clear the check-out field
     }
 });














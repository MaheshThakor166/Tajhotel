<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Rates Form</title>
    <!-- Bootstrap CSS link if you're using it -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <!-- Main Container -->
    <div class="container mt-5">
        <h2>Check Room Rates</h2>

        <!-- Laravel Form -->
        <form action="{{ url('/check-rates') }}" method="POST">
            @csrf
            <!-- Date Selection -->
            <div class="form-group mb-3 row">
                <div class="col">
                    <label for="check_in" class="form-label">Check In</label>
                    <input type="date" id="check_in" name="check_in" class="form-control" required>
                </div>
                <div class="col">
                    <label for="check_out" class="form-label">Check Out</label>
                    <input type="date" id="check_out" name="check_out" class="form-control" required>
                </div>
            </div>

            <!-- Guests Selection -->
            <div id="rooms-container">
                <div class="room" data-room="1">
                    <div class="form-group mb-3">
                        <label>Room 1</label>
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
            <a id="add-room" href="#">Add More Rooms</a>

            <!-- Check Rates Button -->
            <div class="mt-3">
                <button type="submit" class="btn btn-primary" id="check-rates-btn">Check Rates</button>
            </div>
        </form>
    </div>

    <!-- Optional Bootstrap JS and jQuery links if you're using them -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Optional JavaScript for Increment/Decrement Functionality -->
    <script>
        function increment(button) {
            var input = button.parentElement.querySelector('input');
            if (parseInt(input.value) < parseInt(input.max)) {
                input.value = parseInt(input.value) + 1;
            }
            updateTotals();
        }

        function decrement(button) {
            var input = button.parentElement.querySelector('input');
            if (parseInt(input.value) > parseInt(input.min)) {
                input.value = parseInt(input.value) - 1;
            }
            updateTotals();
        }

        function updateTotals() {
            var totalRooms = document.querySelectorAll('.room').length;
            var totalAdults = 0;
            var totalChildren = 0;

            document.querySelectorAll('input[name="adults[]"]').forEach(function(input) {
                totalAdults += parseInt(input.value);
            });

            document.querySelectorAll('input[name="children[]"]').forEach(function(input) {
                totalChildren += parseInt(input.value);
            });

            document.getElementById('total-rooms').textContent = totalRooms;
            document.getElementById('total-adults').textContent = totalAdults;
            document.getElementById('total-children').textContent = totalChildren;
        }

        document.getElementById('add-room').addEventListener('click', function(e) {
            e.preventDefault();
            var roomCount = document.querySelectorAll('.room').length + 1;
            var roomHtml = `
                <div class="room" data-room="${roomCount}">
                    <div class="form-group mb-3">
                        <label>Room ${roomCount}</label>
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
            `;
            document.getElementById('rooms-container').insertAdjacentHTML('beforeend', roomHtml);
            updateTotals();
        });
    </script>
</body>
</html>

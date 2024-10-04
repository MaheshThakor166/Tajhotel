<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Room Categories</title>
    <!-- Bootstrap CSS link -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Room Categories</h2>
        <div class="row">
            <!-- Room Card 1 -->
            <div class="col-md-4">
                <div class="card">
                    <!-- Carousel inside the card -->
                    <div id="roomCarousel1" class="carousel slide" data-ride="carousel">
                        <!-- Carousel Images -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="https://via.placeholder.com/400x200" class="d-block w-100" alt="Deluxe Room 1">
                            </div>
                            <div class="carousel-item">
                                <img src="https://via.placeholder.com/400x200?text=Deluxe+Room+Image+2" class="d-block w-100" alt="Deluxe Room 2">
                            </div>
                            <div class="carousel-item">
                                <img src="https://via.placeholder.com/400x200?text=Deluxe+Room+Image+3" class="d-block w-100" alt="Deluxe Room 3">
                            </div>
                        </div>

                        <!-- Controls for Previous/Next -->
                        <a class="carousel-control-prev" href="#roomCarousel1" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#roomCarousel1" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Deluxe Room</h5>
                        <p class="card-text">A luxurious room with king-size bed, free Wi-Fi, and a beautiful city view.</p>
                        <p><strong>Price:</strong> $120/night</p>
                        <a href="#" class="btn btn-primary">Book Now</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <p><strong>Check In:</strong> {{ session('check_in') }}</p>
                <p><strong>Check Out:</strong> {{ session('check_out') }}</p>
                <p><strong>Total Rooms:</strong> {{ session('total_rooms') }}</p>
                <p><strong>Total Adults:</strong> {{ session('total_adults') }}</p>
                <p><strong>Total Children:</strong> {{ session('total_children') }}</p>
            </div>

            <!-- Room Card 2 -->
            <div class="col-md-4">
                <div class="card">
                    <!-- Carousel inside the card -->
                    <div id="roomCarousel2" class="carousel slide" data-ride="carousel">
                        <!-- Carousel Images -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="https://via.placeholder.com/400x200" class="d-block w-100" alt="Super Deluxe Room 1">
                            </div>
                            <div class="carousel-item">
                                <img src="https://via.placeholder.com/400x200?text=Super+Deluxe+Room+Image+2" class="d-block w-100" alt="Super Deluxe Room 2">
                            </div>
                            <div class="carousel-item">
                                <img src="https://via.placeholder.com/400x200?text=Super+Deluxe+Room+Image+3" class="d-block w-100" alt="Super Deluxe Room 3">
                            </div>
                        </div>

                        <!-- Controls for Previous/Next -->
                        <a class="carousel-control-prev" href="#roomCarousel2" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#roomCarousel2" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Super Deluxe Room</h5>
                        <p class="card-text">Spacious room with premium amenities, Wi-Fi, and complimentary breakfast.</p>
                        <p><strong>Price:</strong> $150/night</p>
                        <a href="#" class="btn btn-primary">Book Now</a>
                    </div>
                </div>
            </div>

            <!-- Room Card 3 -->
            <div class="col-md-4">
                <div class="card">
                    <!-- Carousel inside the card -->
                    <div id="roomCarousel3" class="carousel slide" data-ride="carousel">
                        <!-- Carousel Images -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="https://via.placeholder.com/400x200" class="d-block w-100" alt="Family Suite 1">
                            </div>
                            <div class="carousel-item">
                                <img src="https://via.placeholder.com/400x200?text=Family+Suite+Image+2" class="d-block w-100" alt="Family Suite 2">
                            </div>
                            <div class="carousel-item">
                                <img src="https://via.placeholder.com/400x200?text=Family+Suite+Image+3" class="d-block w-100" alt="Family Suite 3">
                            </div>
                        </div>

                        <!-- Controls for Previous/Next -->
                        <a class="carousel-control-prev" href="#roomCarousel3" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#roomCarousel3" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Family Suite</h5>
                        <p class="card-text">Ideal for families, with multiple beds, a living area, and kid-friendly amenities.</p>
                        <p><strong>Price:</strong> $200/night</p>
                        <a href="#" class="btn btn-primary">Book Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional Bootstrap JS and jQuery links -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

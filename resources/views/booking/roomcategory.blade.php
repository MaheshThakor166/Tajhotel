<!DOCTYPE html>
<html lang="en">

<head>
    @include('include.head')
</head>

<body>
    <div>
        @include('include.header')
    </div>

    <section class="booking-img-view">
        <div class="inner-section">
            <div class="img-container">
                <img src="{{ asset('images/bk.jpg') }}" alt="banner img">
            </div>
        </div>
    </section>
    <section class="inner-view">
        <div class="content-box">
            <div class="row">
                <div class="col-lg-2">
                    <p class="t-data"><strong>Check In :</strong> {{ session('check_in') }}</p>
                </div>
                <div class="col-lg-2">
                    <p class="t-data"><strong>Check Out :</strong> {{ session('check_out') }}</p>
                </div>
                <div class="col-lg-2">
                    <p class="t-data"><strong>Total Rooms :</strong> {{ session('total_rooms') }}</p>
                </div>
                <div class="col-lg-2">
                    <p class="t-data"><strong>Total Adults :</strong> {{ session('total_adults') }}</p>
                </div>
                <div class="col-lg-2">
                    <p class="t-data"><strong>Total Children :</strong> {{ session('total_children') }}</p>
                </div>
            </div>
    </section>
    <div class="container mt-5">
        <h2 class="text-center">Room Categories</h2>
        
        <div class="row">
            @foreach ($rooms as $room)
                <div class="col-md-4">
                    <div class="card">
                        <div id="roomCarousel{{ $room->id }}" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                @foreach (json_decode($room->images) as $key => $image)
                                    <div class="carousel-item {{ $key === 0 ? 'active' : '' }}">
                                        <img src="{{ $image }}" class="d-block w-100" alt="{{ $room->title }}">
                                    </div>
                                @endforeach
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#roomCarousel{{ $room->id }}" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#roomCarousel{{ $room->id }}" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{ $room->title }}</h5>
                            <p class="card-text">{{ $room->description }}</p>
                            <p><strong>Price:</strong> ${{ $room->price }}/night</p>
                            <a href="#" class="btn btn-primary">Book Now</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div>
        @include('include.script')
    </div>
</body>

</html>

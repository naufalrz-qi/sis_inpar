@extends('template.app')
@section('content')
    {{-- Heroes --}}
    <div id="home" class="container col-xxl-8 px-4 py-5">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-10 col-sm-8 col-lg-6">
                <img src="{{ asset('img/dashboard/dash_welcome.jpeg') }}" class="d-block mx-lg-auto img-fluid"
                    alt="Bootstrap Themes" width="700" height="500" loading="lazy">
            </div>
            <div class="col-lg-6">
                <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">Welcome to Amazing Tourist Destinations!</h1>
                <p class="lead">Embark on your adventure in our tourist destinations, where you'll discover stunning
                    natural wonders and priceless cultural treasures. From towering mountains to glistening beaches, from
                    majestic historical sites to the warm hospitality of local communities, we have everything to fulfill
                    every traveler's wishes and dreams.</p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                    <a href="{{ route('register') }}" class="btn btn-warning btn-lg px-4 me-md-2">Get Started</a>
                </div>
            </div>
        </div>
    </div>

    {{-- About --}}
    <div id="about" class="my-5">
        <div class="p-5 text-center bg-body-tertiary">
            <div class="container py-5">
                <h1 class="text-body-emphasis">About</h1>
                <p class="col-lg-8 mx-auto lead">
                    Welcome to Sispar, your gateway to unforgettable travel experiences. From pristine beaches to vibrant
                    cities, we offer diverse destinations and comprehensive resources to help you plan and book your perfect
                    trip. With our user-friendly platform and expert guidance, embark on your next adventure with confidence
                    and create memories that last a lifetime.
                </p>
            </div>
        </div>
    </div>


    {{--  Features --}}
    <div id="destinations" class="container px-4 py-5" id="custom-cards">
        <h2 class="pb-2 border-bottom">Destinations</h2>

        <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
            <div class="col">
                <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg"
                    style="background-image: url('{{ asset('img/features/anak_dara.jpg') }}');">
                    <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                        <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Anak Dara Mountain</h3>
                        <ul class="d-flex list-unstyled mt-auto justify-content-end">
                            <li class="d-flex align-items-center">
                                <a href="#" class="btn btn-warning">View</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg"
                    style="background-image: url('{{ asset('img/features/kuta_mandalika.jpeg') }}');">
                    <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                        <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Kuta Mandalika Beach</h3>
                        <ul class="d-flex list-unstyled mt-auto justify-content-end">
                            <li class="d-flex align-items-center">
                                <a href="#" class="btn btn-warning">View</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg"
                    style="background-image: url('{{ asset('img/features/benang_kelambu.jpg') }}');">
                    <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
                        <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Benang Kelambu Waterfall</h3>
                        <ul class="d-flex list-unstyled mt-auto justify-content-end">
                            <li class="d-flex align-items-center">
                                <a href="#" class="btn btn-warning">View</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
        <div class="d-grid justify-content-lg-center">
            <a href="{{ route('viewmore.destinations') }}" class="btn btn-warning btn-lg px-4 me-md-2">View More</a>
        </div>


    </div>
    {{-- Contact --}}
    <section id="contact" class="container-fluid p-4">
        <h2 class="text-center mb-4">Contact Us</h2>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="mailto:estarossa.nrz@gmail.com" method="POST" enctype="text/plain">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="_replyto" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-warning mt-3">Send Message</button>
                </form>
            </div>
        </div>
    </section>
@endsection

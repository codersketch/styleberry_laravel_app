<x-layout>
    <x-slot:heading>
        <div class="container my-5">
            <div class="row d-flex align-items-center g-3">
                <div class="col-12 col-md-7 order-2 order-md-1 text-center text-md-start">
                    <h1 class="hero-text-tertiary">Welcome to Styleberry</h1>
                    <p class="hero-para-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto
                        rerum
                        deleniti quisquam
                        exercitationem expedita ad perspiciatis dolore accusantium? Amet, perspiciatis.</p>
                    <button class="hero-btn btn btn-outline-primary" type="submit">Book Your Slot</button>
                </div>
                <div class="col-12 col-md-5 order-1 order-md-2">
                    <img src="{{ URL('images/hero.png') }}" alt="" class="img-fluid w-100">
                </div>
            </div>
        </div>
    </x-slot:heading>
    <x-slot:content>
        {{-- services section start --}}
        <div class="bg-white text-dark text-center mt-5">
            <h1 class="py-2">services</h1>
        </div>
        <div class="container">
            <div class="row">
                @foreach ($services as $service)
                    @if ($service['id'] <= 3)
                        <div class="col-6 col-md-4 g-3 vw-50 ">
                            <div class="card">
                                <div class="bg-image hover-overlay" data-mdb-ripple-init data-mdb-ripple-color="light">
                                    <img src="{{ $service['imgUrl'] }}" class="img-fluid rounded" />
                                    <a href="#!">
                                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                    </a>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">{{ $service['name'] }}</h5>
                                    <p class="text-danger card-text m-0">Price:
                                        <span
                                            class="fs-6 text-decoration-line-through">&#8377;{{ $service['endPrice'] }}/-</span>
                                        <span class="fs-5 fw-medium">&#8377;{{ $service['startPrice'] }}/-</span>
                                    </p>
                                    <p class="card-text">{{ substr($service['description'], 0, 50) }}</p>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
        {{-- services section end --}}

        {{-- tesimonials start --}}
        <div class="bg-white text-dark text-center mt-5">
            <h1 class="py-2">Testimonials</h1>
        </div>
        <div class="container">
            <div class="row">
                @foreach ($services as $service)
                    @if ($service['id'] <= 3)
                        <div class="col-6 col-md-4 g-3 vw-50 ">
                            <div class="card">
                                <div class="bg-image hover-overlay" data-mdb-ripple-init data-mdb-ripple-color="light">
                                    <img src="{{ $service['imgUrl'] }}" class="img-fluid rounded" />
                                    <a href="#!">
                                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                    </a>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">{{ $service['name'] }}</h5>
                                    <p class="text-danger card-text m-0">Price:
                                        <span>{{ $service['startPrice'] }}/-</span> -
                                        <span>{{ $service['endPrice'] }}/-</span>
                                    </p>
                                    <p class="card-text">{{ substr($service['description'], 0, 50) }}</p>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
        {{-- tesimonials end --}}

        
        
    </x-slot:content>
</x-layout>

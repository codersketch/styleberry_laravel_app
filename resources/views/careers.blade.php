<x-layout>
    <x-slot:heading>
        <h1 class="text-center">Currently we have job opening for :</h1>
        <br>
    </x-slot:heading>

    <x-slot:content>
        <div class="row d-flex align-item-top justify-content-center">
            @foreach ($jobs as $job)
                <div class="col-12 col-lg-3 m-3 p-0">
                    <div class="card mx-auto" style="width: 18rem;">
                        <img src="{{ URL('https://cdn.pixabay.com/photo/2015/09/23/09/00/workplace-953162_1280.jpg') }}"
                            class="card-img-top bg-dark" alt="Job image">
                        <div class="card-body">
                            <h5 class="card-title">Role : {{ $job['title'] }}</h5>
                            <p class="cart-text"><b>Approx Salary :</b> &#8377; {{ $job['salary'] }} /-</p>
                            <p class="card-text">A salon {{ $job['title'] }} oversees staff, operations, customer
                                service, inventory, finances, and ensures compliance.</p>
                            <a href="/careers/{{ $job['id'] }}" class="btn btn-primary">Apply Now</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </x-slot:content>
</x-layout>

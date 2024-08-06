<x-layout>
    <x-slot:heading>
        <h1 class="text-center my-5">All the services we provide</h1>
    </x-slot:heading>
    <x-slot:content>
        <div class="row d-flex align-item-top justify-content-center mx-auto">
            @foreach ($services as $service)
                <div class="card col-12 col-md-4 col-lg-3  m-3 p-0 bg-secondary text-white Small shadow">
                    <div class="mx-auto" style="heigh:28rem">
                        <img src="{{ $service['imgUrl'] }}"
                            class="card-img-top bg-dark" alt="Job image">
                        <div class="card-body ">
                            <h5 class="card-title">{{ $service['name'] }}</h5>
                            <p class="cart-text">Price :
                                <span>{{ $service['startPrice'] }}</span> - 
                                <span>{{ $service['endPrice'] }}</span>
                            </p>
                            <p class="card-text">{{ $service['description'] }}</p>
                            <a href="" class="btn btn-outline-primary">Book slot</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </x-slot:content>
</x-layout>

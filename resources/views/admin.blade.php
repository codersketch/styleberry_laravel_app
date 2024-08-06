<x-layout>
    <x-slot:heading>
        <div class="m-10"></div>
    </x-slot:heading>
    <x-slot:content>
            <!-- Jumbotron -->

                <div class="container">
                    <div class="row gx-lg-5 align-items-center">
                        <div class="col-lg-6 mb-5 mb-lg-0">
                            <h1 class="my-5 display-3 fw-bold ls-tight">
                                Welcome to<br />
                                <span class="text-primary">Admin Panel</span>
                            </h1>
                            
                        </div>

                        <div class="col-lg-6 mb-5 mb-lg-0">
                            <div class="card bg-transparent shadow-lg text-white rounded">
                                <div class="card-body py-5 px-md-5 ">
                                    <form action="" method="">
                                        <!-- Email input -->
                                        <div data-mdb-input-init class="form-outline mb-4">
                                            <input type="email" id="form3Example3" class="form-control" />
                                            <label class="form-label" for="form3Example3">Email address</label>
                                        </div>

                                        <!-- Password input -->
                                        <div data-mdb-input-init class="form-outline mb-4">
                                            <input type="password" id="form3Example4" class="form-control" />
                                            <label class="form-label" for="form3Example4">Password</label>
                                        </div>

                                        <!-- Submit button -->
                                        <button type="submit" data-mdb-button-init data-mdb-ripple-init
                                            class="btn btn-dark btn-block mb-4">
                                            Sign up
                                        </button>

                                        <div class="col">
                                            <!-- Simple link -->
                                            <a class="text-warning link-underline-warning link-offset-2 link-offset-3-hover  link-underline-opacity-0 link-underline-opacity-75-hover" href="#">Forgot password?</a>
                                        </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- Jumbotron -->

    </x-slot:content>

</x-layout>

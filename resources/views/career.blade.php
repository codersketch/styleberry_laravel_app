<x-layout>
    <x-slot:heading>
        <h1 class="text-center">Apply for Post of {{ $career['title'] }}</h1>
        <br>
    </x-slot:heading>

    <x-slot:content>
        <div class="container">
            <div class="row mx-0 justify-content-center">
                <div class="col-md-7 col-lg-10 px-lg-2 ">
                    <form method="POST" class="w-100 rounded-1 p-4 border " action="" enctype="multipart/form-data">
                        <div class="row">
                            <label class="col-12 col-md-6 d-block mb-4">
                                <span class="form-label d-block">Your full name</span>
                                <input required name="name" type="text" class="form-control"
                                    placeholder="EX: Style Berry" />
                            </label>
                            <label class="col-12 col-md-6 d-block mb-4">
                                <span class="form-label d-block">Role</span>
                                <input class="form-control" type="text" value="{{ $career['title'] }}"
                                    aria-label="Disabled input example" disabled readonly>
                            </label>
                        </div>
                        <div class="row">
                            <label class="col-12 col-md-6 d-block mb-4">
                                <span class="form-label d-block">Email address</span>
                                <input required name="email" type="email" class="form-control"
                                    placeholder="Ex: styleberry@gmail.com" />
                            </label>
                            <label class="col-12 col-md-6 d-block mb-4">
                                <span class="form-label d-block">Phone number</span>
                                <input required name="phone" type="tel" class="form-control"
                                    pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" minlength="10" maxlength="10" />
                            </label>
                        </div>

                        <div class="row">
                            <label class="col-12 col-md-6 d-block mb-4">
                                <span class="form-label d-block">Years of experience</span>
                                <select required name="experience" class="form-select"
                                    class="col-12 col-md-6 d-block mb-4 fs-6">
                                    <option>Less than a year</option>
                                    <option>1 - 2 years</option>
                                    <option>2 - 4 years</option>
                                    <option>4 - 7 years</option>
                                    <option>7 - 10 years</option>
                                    <option>10+ years</option>
                                </select>
                            </label>
                            <label class="col-12 col-md-6 d-block mb-4">
                                <span class="form-label d-block">Your CV</span>
                                <input required name="cv" type="file" class="form-control" accept=".pdf" />
                            </label>
                        </div>

                        <div class="row">
                            <label class="d-block mb-4">
                                <span class="form-label d-block">Tell us more about yourself</span>
                                <textarea name="message" class="form-control" rows="3" placeholder="What motivates you?"></textarea>
                            </label>
                        </div>

                        <div class="row">
                            <div class="mb-4 col-12 col-md-6">
                                <div>
                                    <div class="form-check form-switch">
                                        <label class="d-block">
                                            <input type="checkbox" class="form-check-input" id="flexSwitchCheckDefault"
                                                name="remote" value="yes" />
                                            <span class="form-check-label">I agree to the <a href="#">terms and
                                                    conditions.</a></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary px-3 rounded-3">
                                Apply
                            </button>
                        </div>

                        <div class="d-block text-end">
                            <div class="small">
                                by
                                <img src="{{ URL('images/logo.png') }}" class="" alt="Job image" width="100">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        {{-- <h2>{{ $career['title'] }}</h2>
        <p>{{ $career['salary'] }}</p> --}}

    </x-slot:content>
</x-layout>

@extends('layouts.master')
@section('content')
    <div id="body">
        <div data-aos="fade-up" class="about mt-2">
            <div data-aos="fade-up" class="container">
                <h1>{{ __('Membership Form') }}</h1>
            </div>
        </div>
    </div>
    <div class="container-xxl py-5 category">
            <div class="container">
                <div class="bg-light">
                    <div class="row">
                        <div data-aos="fade-up" class="col-lg-8 col-md-12 p-5 bg-white rounded-3">
                            @if (Session::has('message'))
                                <p class="alert {{ Session::get('alert-class', 'alert-info') }}">
                                    {{ Session::get('message') }}</p>
                            @endif
                            <form data-aos="fade-up"class="row mb-3" method="post"
                                action="{{ route('membership.store') }}">
                                @csrf
                                <div class="col-md-6 p-3">
                                    <label for="full_name" class="form-label">Full Name<span
                                            class="text-danger">*</span></label>
                                    <input type="text" value="{{ old('full_name') }}" class="form-control"
                                        name="full_name" id="full_name" placeholder="Full Name">
                                    @error('full_name')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="col-md-6 p-3">
                                    <label for="address" class="form-label">Address<span
                                            class="text-danger">*</span></label>
                                    <input type="text" value="{{ old('address') }}" class="form-control" name="address"
                                        id="address" placeholder="Address">
                                    @error('address')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="col-md-6 p-3">
                                    <label for="town" class="form-label">Suburb/Town<span
                                            class="text-danger">*</span></label>
                                    <input type="text" value="{{ old('town') }}" class="form-control" name="town"
                                        id="town" placeholder="Suburb/Town">
                                    @error('town')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="col-md-6 p-3">
                                    <label for="state">State/Territory</label>
                                    <select name="state" id="state" class="form-control mt-2">
                                        <option value="">- - Choose - -</option>
                                        @foreach (\App\Enum\StateEnum::cases() as $case)
                                            <option value="{{ $case->value }}"
                                                {{ old('state') == $case->value ? 'selected' : '' }}>
                                                {{ $case->label() }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('state')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                {{-- <div class="col-md-6">
                                    <div class="input-style-1">
                                        <label for="country_id">Country</label>
                                        <select name="country_id" id="country_id" class="form-control mt-2">
                                            <option value="">Select</option>
                                            @foreach ($countries as $country)
                                                <option value="{{ $country->id }}"
                                                    {{ old('country_id') == $country->id ? 'selected' : '' }}>
                                                    {{ $country->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('country_id')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div> --}}

                                <div class="col-md-6 p-3">
                                    <label for="code" class="form-label">Postal Code<span
                                            class="text-danger">*</span></label>
                                    <input type="text" value="{{ old('code') }}" class="form-control" name="code"
                                        id="code" placeholder="PostCode">
                                    @error('code')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>


                                <div class="col-md-6 p-3">
                                    <label for="contact_no" class="form-label">Contact No<span
                                            class="text-danger">*</span></label>
                                    <input type="text" value="{{ old('contact_no') }}" class="form-control"
                                        name="contact_no" id="contact_no" placeholder="Contact No">
                                    @error('contact_no')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>


                                <div class="col-md-6 p-3">
                                    <label for="email" class="form-label">Email<span class="text-danger">*</span></label>
                                    <input type="email" value="{{ old('email') }}" class="form-control" name="email"
                                        id="email" placeholder="Email">
                                    @error('email')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>


                                {{-- <div class="col-md-6 p-3">
                                    <label for="district" class="form-label">Home District (Nepal)
                                        <input type="text" value="{{ old('district') }}" class="form-control"
                                            name="district" id="district" placeholder="District">
                                        @error('district')
                                            <div class="text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                </div> --}}

                                <div class="text-end mt-4">
                                    <button type="submit" class="btn px-4 py-3 btn-outline-dark">Join Now</button>
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-4 col-md-12 text-white aside px-4 py-5">
                            <div data-aos="fade-up" class="mb-5">
                                <h1 class="text-white h3">Contact Information</h1>
                                <p class="opacity-50">
                                    <small>
                                        Fill out the from and we will get back to you whitin 24 hours
                                    </small>
                                </p>
                            </div>
                            <div data-aos="fade-up" class="d-flex flex-column px-0">
                                <ul class="m-0 p-0">
                                    <li class="d-flex justify-content-start align-items-center mb-4">
                                        <span class="opacity-50 d-flex align-items-center me-3 fs-2">
                                            <i class="fa fa-phone"></i>
                                        </span>
                                        <span>{{ $header->office_phone }}</span>
                                    </li>
                                    <li class="d-flex align-items-center r mb-4">
                                        <span class="opacity-50 d-flex align-items-center me-3 fs-2">
                                            <i class="fa fa-envelope"></i>
                                        </span>
                                        <span>{{ $header->office_email }}</span>
                                    </li>

                                    <li class="d-flex justify-content-start align-items-center mb-4">
                                        <span class="opacity-50 d-flex align-items-center me-3 fs-2">
                                            <i class="fa fa-map"></i>
                                        </span>
                                        <span>{{ $header->office_name_en }}</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>




    <div class="container-xxl ml-2">
        <h5><b class="text-danger">Note :-</b> If You Are fom Outside Of Australia, Please Kindly Fill this Form .</h5>
    </div>

    <div class="container-xxl category mb-5">
        <div class="container">
            <div class="bg-light">
                <div class="row">
                    <div data-aos="fade-up" class="col-lg-8 col-md-12 p-5 bg-white rounded-3">
                        @if (Session::has('message'))
                            <p class="alert {{ Session::get('alert-class', 'alert-info') }}">
                                {{ Session::get('message') }}</p>
                        @endif
                        <form data-aos="fade-up"class="row mb-3" method="post"
                            action="{{ route('membership.store') }}">
                            @csrf
                            <div class="col-md-6 p-3">
                                <label for="full_name" class="form-label">Full Name<span
                                        class="text-danger">*</span></label>
                                <input type="text" value="{{ old('full_name') }}" class="form-control"
                                    name="full_name" id="full_name" placeholder="Full Name">
                                @error('full_name')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="col-md-6 p-3">
                                <div class="input-style-1">
                                    <label for="country_id">Country</label>
                                    <select name="country_id" id="country_id" class="form-control mt-2">
                                        <option value="">Select</option>
                                        @foreach ($countries as $country)
                                            <option value="{{ $country->id }}"
                                                {{ old('country_id') == $country->id ? 'selected' : '' }}>
                                                {{ $country->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('country_id')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6 p-3">
                                <label for="address" class="form-label">Address<span
                                        class="text-danger">*</span></label>
                                <input type="text" value="{{ old('address') }}" class="form-control" name="address"
                                    id="address" placeholder="Address">
                                @error('address')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>


                            <div class="col-md-6 p-3">
                                <label for="code" class="form-label">Postal Code<span
                                        class="text-danger">*</span></label>
                                <input type="text" value="{{ old('code') }}" class="form-control" name="code"
                                    id="code" placeholder="PostCode">
                                @error('code')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>


                            <div class="col-md-6 p-3">
                                <label for="contact_no" class="form-label">Contact No<span
                                        class="text-danger">*</span></label>
                                <input type="text" value="{{ old('contact_no') }}" class="form-control"
                                    name="contact_no" id="contact_no" placeholder="Contact No">
                                @error('contact_no')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>


                            <div class="col-md-6 p-3">
                                <label for="email" class="form-label">Email<span class="text-danger">*</span></label>
                                <input type="email" value="{{ old('email') }}" class="form-control" name="email"
                                    id="email" placeholder="Email">
                                @error('email')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>



                            <div class="text-end mt-4">
                                <button type="submit" class="btn px-4 py-3 btn-outline-dark">Join Now</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-4 col-md-12 text-white aside px-4 py-5">
                        <div data-aos="fade-up" class="mb-5">
                            <h1 class="text-white h3">Contact Information</h1>
                            <p class="opacity-50">
                                <small>
                                    Fill out the from and we will get back to you whitin 24 hours
                                </small>
                            </p>
                        </div>
                        <div data-aos="fade-up" class="d-flex flex-column px-0">
                            <ul class="m-0 p-0">
                                <li class="d-flex justify-content-start align-items-center mb-4">
                                    <span class="opacity-50 d-flex align-items-center me-3 fs-2">
                                        <i class="fa fa-phone"></i>
                                    </span>
                                    <span>{{ $header->office_phone }}</span>
                                </li>
                                <li class="d-flex align-items-center r mb-4">
                                    <span class="opacity-50 d-flex align-items-center me-3 fs-2">
                                        <i class="fa fa-envelope"></i>
                                    </span>
                                    <span>{{ $header->office_email }}</span>
                                </li>

                                <li class="d-flex justify-content-start align-items-center mb-4">
                                    <span class="opacity-50 d-flex align-items-center me-3 fs-2">
                                        <i class="fa fa-map"></i>
                                    </span>
                                    <span>{{ $header->office_name_en }}</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

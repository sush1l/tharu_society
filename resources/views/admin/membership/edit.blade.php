@extends('layouts.app')
@section('content')
    <div class="title-wrapper pt-30">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="title mb-30">
                    <h2>Membership</h2>
                </div>
            </div>
            <!-- end col -->
            <div class="col-md-6">
                <div class="breadcrumb-wrapper mb-30">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('admin.dashboard') }}">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                <a href="{{ route('admin.membership.index') }}">Membership</a>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <div class="card-style mb-30">
        <form action="{{ route('admin.membership.update', $membership) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="row">
                <div class="col-md-6">
                    <div class="input-style-1">
                        <label for="title">शीर्षक</label>
                        <input type="text" id="title" name="title" placeholder="शीर्षक"
                            value="{{ old('title', $membership->title) }}">
                        @error('title')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>


                <div class="col-md-6">
                    <div class="input-style-1">
                        <label for="membership_category_id">Category</label>
                        <select name="membership_category_id" id="membership_category_id" class="form-control">
                            <option value="">Select</option>
                            @foreach ($membershipCategories as $membershipCategory)
                                <option value="{{ $membershipCategory->id }}"
                                    {{ old('membership_category_id', $membership->membership_category_id) == $membershipCategory->id ? 'selected' : '' }}>
                                    {{ $membershipCategory->title }}</option>
                            @endforeach
                        </select>
                        @error('membership_category_id')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="input-style-1">
                        <label for="photo">feature Photo</label>
                        <input type="file" id="photo" name="photo">
                        @error('photo')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="input-style-1">
                        <label for="position">Position</label>
                        <input type="number" id="position" name="position" value="{{old('position', $membership->position)}}">
                        @error('position')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                </div>



                <div class="col-md-12">
                    <div class="input-style-1">
                        <label for="desc">Description</label>
                        <textarea name="desc" id="desc" cols="30" rows="10" class="summernote">{{$membership->desc}}</textarea>
                        @error('desc')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                </div>

                <div class="col-md-12">
                    <button type="submit" class="btn btn-sm btn-primary">
                        Submit
                    </button>
                </div>
            </div>
        </form>
    </div>
    @push('script')
        {{-- summernote js --}}
        <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
        <script>
            $(document).ready(function() {
                $('.summernote').summernote({
                    placeholder: 'Description',
                    tabsize: 2,
                    height: 300
                });
            });
        </script>
    @endpush
@endsection

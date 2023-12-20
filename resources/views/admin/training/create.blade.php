@extends('layouts.app')
@section('content')
    <div class="title-wrapper pt-30">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="title mb-30">
                    <h2>Training/Consultancy</h2>
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
                                <a href="{{ route('admin.training.index') }}">Training/Consultancy</a>
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
        <form action="{{ route('admin.training.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="input-style-1">
                        <label for="title">शीर्षक</label>
                        <input type="text" id="title" name="title" placeholder="शीर्षक"
                            value="{{ old('title') }}">
                        @error('title')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                @if (config('default.dual_language'))
                    <div class="col-md-6">
                        <div class="input-style-1">
                            <label for="title_en">शीर्षक English</label>
                            <input type="text" id="title_en" name="title_en" placeholder="शीर्षक English"
                                value="{{ old('title_en') }}">
                            @error('title_en')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                @endif

                <div class="col-md-6">
                    <div class="input-style-1">
                        <label for="instructor">पाठ्यक्रम प्रशिक्षक</label>
                        <input type="text" id="instructor" name="instructor" placeholder="पाठ्यक्रम प्रशिक्षक"
                            value="{{ old('instructor') }}">
                        @error('instructor')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-style-1">
                        <label for="training_category_id">Category</label>
                        <select name="training_category_id" id="training_category_id" class="form-control">
                            <option value="">Select</option>
                            @foreach ($trainingCategories as $trainingCategory)
                                <option value="{{ $trainingCategory->id }}"
                                    {{ old('training_category_id') == $trainingCategory->id ? 'selected' : '' }}>
                                    {{ $trainingCategory->title }}</option>
                            @endforeach
                        </select>
                        @error('training_category_id')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-style-1">
                        <label for="price">रकम</label>
                        <input type="text" id="price" name="price" placeholder="रकम"
                            value="{{ old('price') }}">
                        @error('price')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-style-1">
                        <label for="time">समय</label>
                        <input type="text" id="time" name="time" placeholder="समय"
                            value="{{ old('time') }}">
                        @error('time')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-style-1">
                        <label for="image">Photo</label>
                        <input type="file" id="photo" name="image">
                        @error('image')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-style-1">
                        <label for="date">मिति</label>
                        <input type="date" id="date" name="date" placeholder="मिति"
                            value="{{ old('date') }}">
                        @error('date')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="input-style-1">
                        <label for="description">Description</label>
                        <textarea name="description" id="description" cols="30" rows="10" class="summernote"></textarea>
                        @error('description')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                @if (config('default.dual_language'))
                    <div class="col-md-12">
                        <div class="input-style-1">
                            <label for="description_en">Description English</label>
                            <textarea name="description_en" id="description_en" cols="30" rows="10" class="summernote"></textarea>
                            @error('description_en')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                @endif
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

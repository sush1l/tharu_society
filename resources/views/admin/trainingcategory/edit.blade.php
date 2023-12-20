@extends('layouts.app')
@section('content')
    <div class="title-wrapper pt-30">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="title mb-30">
                    <h2>Training/Consultancy Category</h2>
                </div>
            </div>
            <!-- end col -->
            <div class="col-md-6">
                <div class="breadcrumb-wrapper mb-30">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{route('admin.dashboard')}}">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Training/Consultancy Category
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
        <form action="{{route('admin.trainingCategory.update', $trainingCategory)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="row">
                <div class="col-md-6">
                    <div class="input-style-1">
                        <label for="title">Title</label>
                        <input type="text" id="title" name="title"
                               placeholder="Title" value="{{old('title', $trainingCategory->title)}}">
                        @error('title')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                </div>
                @if(config('default.dual_language'))
                <div class="col-md-6">
                    <div class="input-style-1">
                        <label for="title_en">Title English</label>
                        <input type="text" id="title_en" name="title_en"
                               placeholder="Title English" value="{{old('title_en', $trainingCategory->title_en)}}">
                        @error('title_en')
                        <p class="text-danger">{{$message}}</p>
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
@endsection

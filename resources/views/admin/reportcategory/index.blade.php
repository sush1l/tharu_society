@extends('layouts.app')
@section('content')
    <div class="title-wrapper pt-30">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="title mb-30">
                    <h2>Report Category</h2>
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
                              Report Category
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
        <form action="{{route('admin.reportCategory.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="input-style-1">
                        <label for="title">Title</label>
                        <input type="text" id="title" name="title"
                               placeholder="Title" value="{{old('title')}}">
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
                               placeholder="Title English" value="{{old('title_en')}}">
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
    <div class="row">
        <div class="col-lg-12">
            <div class="card-style mb-30">
                <h6 class="mb-10">Link List</h6>
                <div class=" table-responsive table-hover">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>SN</th>
                            <th>Title</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($reportCategories as $reportCategory)
                            <tr>
                                <td>
                                    {{$loop->iteration}}
                                </td>
                                <td>
                                    {{$reportCategory->title}}
                                </td>

                                <td>
                                    <div class="action">
                                        <a href="{{route('admin.reportCategory.edit', $reportCategory)}}" class="text-info">
                                            <i class="lni lni-pencil"></i>
                                        </a>
                                        <form action="{{route('admin.reportCategory.destroy',$reportCategory)}}"
                                              method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="text-danger show_confirm">
                                                <i class="lni lni-trash-can"></i>
                                            </button>
                                        </form>

                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td class="text-center" colspan="4">No Result Found</td>
                            </tr>
                        @endforelse

                        </tbody>
                    </table>
                    <!-- end table -->
                </div>
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->
    </div>
@endsection

@extends('layouts.app')
@section('content')
    <div class="title-wrapper pt-30">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="title mb-30">
                    <h2>Dashboard</h2>
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
                        </ol>
                    </nav>
                </div>
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- ========== title-wrapper end ========== -->
    <div class="row">

        <div class="col-xl-3 col-lg-4 col-sm-6">
            <div class="icon-card mb-30">
                <div class="icon purple">
                    <i class="lni lni-gallery"></i>
                </div>
                <div class="content">
                    <h6 class="mb-10">जम्मा फोटोहरु</h6>
                    <h3 class="text-bold text-center mb-10">{{$photoGalleryCount}}</h3>
                </div>
            </div>
        </div>

        @foreach($documentCategories as $documentCategory)
            <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="icon-card mb-30">
                    <div class="icon purple">
                        <i class="lni lni-files"></i>
                    </div>
                    <div class="content">
                        <h6 class="mb-10">{{$documentCategory->title}}</h6>
                        <h3 class="text-bold text-center mb-10">{{$documentCategory->main_documents_count}}</h3>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <!-- End Row -->
    <!-- end container -->

@endsection

@extends('layouts.app')
@section('content')
    <div class="title-wrapper pt-30">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="title mb-30">
                    <h2>फोटो ग्यालरी</h2>
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
                            <li class="breadcrumb-item"><a href="">फोटो ग्यालरी</a></li>

                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card-style mb-30">
                        <div class="card-body">
                            <div class="row">
                                @forelse ($photoGallery->photos as $photo)
                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <div class="card-header">
                                                <form action="{{ route('admin.photo.deletePhoto',$photo->id) }}" method="post" >
                                                    @csrf
                                                    @method('delete')
                                                    <button class="btn btn-danger show_confirm"  type="submit"> <i class="mdi mdi-close"></i> </button>
                                                </form>
                                            </div>
                                            <div class="card-body">
                                                <img src="{{ asset('storage/'.$photo->images) }}" alt="Image"
                                                     style="height: 200px;width:100%">
                                            </div>
                                        </div>
                                    </div>
                                @empty
                                    <h2 style="text-align: center;">No Result Found</h2>
                                @endforelse


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

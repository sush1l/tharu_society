@extends('layouts.app')
@section('content')
    <div class="title-wrapper pt-30">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="title mb-30">
                    <h2>Membership Join Request</h2>
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
                                Membership Join Request
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card-style mb-30">
                <div style="display: flex;justify-content: space-between">
                    <h6 class="mb-10">Join Request Detail</h6>
                </div>


                    <div class="d-flex">
                        <div class="col-md-6">
                            <p class="text-muted mb-2 font-15"><strong>Name :</strong> <span
                                class="ms-2">{{ $membershipJoin->full_name }}</span>
                        </p>

                        <p class="text-muted mb-2 font-15"><strong>Contact No :</strong> <span
                                class="ms-2">{{ $membershipJoin->contact_no }}</span></p>

                        <p class="text-muted mb-2 font-15"><strong>Address :</strong><span
                                class="ms-2">{{ $membershipJoin->address }}</span></p>
                        </div>

                        <div class="col-md-6">
                            <p class="text-muted mb-2 font-15"><strong>Subrub/Town :</strong> <span
                                class="ms-2">{{ $membershipJoin->town }}</span>
                        </p>

                        <p class="text-muted mb-2 font-15"><strong>State/Territory :</strong> <span
                                class="ms-2">{{ $membershipJoin->state }}</span></p>

                        <p class="text-muted mb-2 font-15"><strong>email :</strong><span
                                class="ms-2">{{ $membershipJoin->address }}</span></p>
                        </div>
                    </div>


            </div>
            <!-- end card -->
        </div>
        <!-- end col -->
    </div>
@endsection

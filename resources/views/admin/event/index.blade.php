@extends('layouts.app')
@section('content')
    <div class="title-wrapper pt-30">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="title mb-30">
                    <h2>Event</h2>
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
                                Event List
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
                    <h6 class="mb-10">Event List</h6>
                    <a href="{{ route('admin.event.create') }}" class="btn btn-sm btn-primary">Add New</a>
                </div>
                <div class="table-wrapper table-responsive table-hover">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>
                                    <h6>#</h6>
                                </th>
                                <th>
                                    <h6>Title</h6>
                                </th>
                                <th>
                                    <h6>Photo</h6>
                                </th>
                                <th>
                                    <h6>Action</h6>
                                </th>
                            </tr>
                            <!-- end table row-->
                        </thead>
                        <tbody>
                            @foreach ($events as $event)
                                <tr>
                                    <td>
                                        {{ $loop->iteration }}
                                    </td>
                                    <td class="min-width">
                                        <p>{{ $event->title }}</p>
                                    </td>
                                    <td class="min-width">
                                        <img src="{{ $event->image }}" alt="{{ $event->title }}" width="100">
                                    </td>

                                    <td>
                                        <div class="action">
                                            <a href="{{ route('admin.event.edit', $event) }}" class="text-info">
                                                <i class="lni lni-pencil"></i>
                                            </a>
                                            <form action="{{ route('admin.event.destroy', $event) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button class="text-danger show_confirm" type="submit">
                                                    <i class="lni lni-trash-can"></i>
                                                </button>
                                            </form>

                                        </div>
                                    </td>
                                </tr>
                            @endforeach


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

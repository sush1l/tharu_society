@extends('layouts.app')
@section('content')
    <div class="title-wrapper pt-30">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="title mb-30">
                    <h2>Training/Consultancy</h2>
                </div>
            </div>
            <div class="col-md-6">
                <div class="breadcrumb-wrapper mb-30">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{route('admin.dashboard')}}">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Training/Consultancy
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card-style mb-30">
                <div style="display: flex;justify-content: space-between">
                    <h6 class="mb-10">Training/Consultancy</h6>
                    <a href="{{route('admin.training.create')}}" class="btn btn-sm btn-primary">Add New</a>
                </div>
                <div class="table-wrapper table-responsive table-hover">
                    <table class="table">
                        <thead>
                        <tr>
                            <th><h6>#</h6></th>
                            <th><h6>Title</h6></th>
                            <th><h6>Title En</h6></th>
                            <th><h6>Course Instructor</h6></th>
                            <th><h6>Category Title</h6></th>
                            <th><h6>Photo</h6></th>
                            <th><h6>Amount</h6></th>
                            <th><h6>Action</h6></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($trainings as $training)
                            <tr>
                                <td>
                                    {{$loop->iteration}}
                                </td>
                                <td class="min-width">
                                    <p>{{$training->title}}</p>
                                </td>
                                <td class="min-width">
                                    <p>{{ $training->title_en }}</p>
                                </td>
                                <td class="min-width">
                                    <p>{{ $training->instructor }}</p>
                                </td>
                                <td class="min-width">
                                    <p>{{ $training->trainingCategory->title }}</p>
                                </td>
                                <td class="min-width">
                                    <img src="{{$training->image}}" alt="{{$training->title}}" width="100">
                                </td>
                                <td class="min-width">
                                    <p>{{ $training->price }}</p>
                                </td>

                                <td>
                                    <div class="action">
                                        <a href="{{route('admin.training.edit', $training)}}" class="text-info mx-4">
                                            <i class="lni lni-pencil"></i>
                                        </a>
                                        <form action="{{route('admin.training.destroy',$training)}}" method="POST">
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
                </div>
            </div>
        </div>
    </div>
@endsection

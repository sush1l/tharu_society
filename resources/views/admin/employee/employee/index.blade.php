@extends('layouts.app')
@section('content')
    <div class="title-wrapper pt-30">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="title mb-30">
                    <h2>Employee</h2>
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
                            <li class="breadcrumb-item"><a href="#">Employees</a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Employee
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
                    <h6>Employee List</h6>
                    <a href="{{route('admin.employee.create')}}"
                       class="btn btn-sm btn-primary"> Add New
                    </a>
                </div>
                <div class="table-wrapper table-responsive table-hover">
                    <table class="table">
                        <thead>
                        <tr>
                            <th><h6>Photo</h6></th>
                            <th><h6>Name</h6></th>
                            <th><h6>Department</h6></th>
                            <th><h6>Designation</h6></th>
                            <th><h6>Email</h6></th>
                            <th><h6>Phone</h6></th>
                            <th><h6>Action</h6></th>
                        </tr>
                        <!-- end table row-->
                        </thead>
                        <tbody>
                        @foreach($employees as $employee)
                            <tr>
                                <td class="min-width">
                                    <img src="{{$employee->photo}}" alt="{{$employee->name}}" height="80" width="80">
                                </td>
                                <td class="min-width">
                                    <p>{{$employee->name}}</p>
                                </td>
                                <td class="min-width">
                                    <p>{{$employee->department->title ?? ''}}</p>
                                </td>
                                <td class="min-width">
                                    <p>{{$employee->designation->title ?? ''}}</p>
                                </td>
                                <td class="min-width">
                                    <p>{{$employee->email}}</p>
                                </td>
                                <td class="min-width">
                                    <p>{{$employee->phone}}</p>
                                </td>

                                <td>
                                    <div class="action">
                                        <a href="{{route('admin.employee.edit', $employee)}}" class="text-info">
                                            <i class="lni lni-pencil"></i>
                                        </a>
                                        <form action="{{route('admin.employee.destroy',$employee)}}" method="POST">
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

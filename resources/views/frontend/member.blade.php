@extends('layouts.master')
@section('content')
    <div id="body">
        <div class="about mt-4">
            <div class="container">
                <h1>{{ __('Members') }}</h1>
            </div>
        </div>
    </div>
    <div class="container my-3">
        <div class="row">
            <table class="table table-striped table-bordered mt-2">
                <thead>
                    <tr>
                        <th scope="col">{{ __('S.N') }}</th>
                        <th scope="col">{{ __('Name') }}</th>
                        <th scope="col">{{ __('Designation') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($members as $member)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>
                                {{ $member->title }}
                            </td>
                            <td>
                                {{ $member->membershipCategory->title }}
                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

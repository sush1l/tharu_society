@extends('layouts.master')
@section('content')
    <div id="body">
        <div class="about mt-4">
            <div class="container">
                <h1>{{ __('Membership') }}</h1>
            </div>
        </div>
    </div>
    <div class="container my-3">
        <section class="light-bg inner">
            @foreach ($memberships as $membership)
                <div class="about-inner">
                    <div class="content_image">
                        <img class="img-responsive" src="{{ $membership->photo }}" alt="About" align="">
                        <p style="text-align: justify;">
                            {!! $membership->desc !!}
                        </p>
                    </div>
                </div>
            @endforeach
        </section>
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
                    @foreach ($memberships as $membership)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>
                                {{ $membership->title }}
                            </td>
                            <td>
                                {{ $membership->membershipCategory->title }}
                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

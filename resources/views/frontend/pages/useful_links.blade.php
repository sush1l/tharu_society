@extends('layouts.master')
@section('content')
    <div id="body">
        <div class="about mt-4">
            <div class="container">
                <h1>{{__('Links')}}</h1>
            </div>
        </div>
    </div>
    <div class="container my-3">
        <div class="row">
            <table class="table table-striped table-bordered mt-2">
                <thead>
                    <tr>
                        <th scope="col">{{__('S.N')}}</th>
                        <th scope="col">{{__('Title')}}</th>
                        <th scope="col">{{__('Link')}}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($links as $link)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $link->title }}</td>
                        <td>
                            <a href="{{ $link->url }}" target="_blank">
                                {{ $link->url }}
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

@extends('layouts.master')
@section('content')
    <div id="body">
        <div class="about mt-4">
            <div class="container">
                <h1>{{request()->language=='en' ? $reportCategory->title_en : $reportCategory->title}}</h1>
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
                    <th scope="col">{{__('Published Date')}}</th>
                    <th scope="col">#</th>
                </tr>
                </thead>
                <tbody>
                @foreach($reportCategory->reports as $report)
                    <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td>{{request()->language=='en' ? $report->title_en : $report->title}}</td>
                        <td>{{$report->date}}</td>
                        <td>
                            <a href="{{ route('report.reportDetail',[$report->id,'language'=>$language]) }}" class="btn btn-success btn-sm">
                                <i class="fa fa-eye"></i>
                            </a>
                            <a href="{{$report->file_url}}" download="{{$report->file_url}}" class="btn btn-primary btn-sm">
                                <i class="fa fa-download"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

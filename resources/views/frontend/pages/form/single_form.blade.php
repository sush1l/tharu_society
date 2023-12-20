@extends('layouts.master')
@section('content')
    <div id="body">
        <div class="about mt-4">
            <div class="container">
                <h1>{{request()->language=='en'? $report->title_en : $report->title}}</h1>
            </div>
        </div>
    </div>
    <section class="single-category-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="news-iframe">
                        <iframe
                            src="{{$report->file_url}}"
                            width="100%" height="600px"></iframe>
                    </div>
                    <div class="p-1">
                        <p> </p>
                    </div>
                </div>
                <div class="col-lg-4 mt-4 mt-lg-0">
                    <div class="box">
                        <h4 class="title my-3">{{__('Related Document')}}</h4>
                        <div class="tab-pane fade show">
                            @foreach($reports as $data)
                            <a href="{{ route('report.reportDetail',[$data->id,'language'=>$language]) }}"
                                class="card-01 mb-2">
                                <h6 class="heading des">{{request()->language=='en' ? $data->title_en : $data->title}}</h6>
                                <p class="mt-2 sub-title">{{$data->date}} | </p>
                            </a>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 mt-4 mt-lg-0 mb-4">
                    {!! request()->language=='en' ? $report->description_en : $report->description !!}
                </div>
            </div>
        </div>
    </section>
@endsection

@extends('layouts.app')
@section('content')
    <div class="title-wrapper pt-30">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="title mb-30">
                    <h2> Tiktok</h2>
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
                            <li class="breadcrumb-item"><a href="">  Tiktok </a></li>

                        </ol>
                    </nav>
                </div>
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>

    <div class="card-style mb-30">
        <form action="{{route('admin.tikTok.update',$tikTok)}}" enctype="multipart/form-data" method="POST">
            @csrf
            @method('put')
            <div class="row">
                <div class="col-md-4">
                    <div class="input-style-1">
                        <label for="title">Title</label>
                        <input type="text" id="title" name="title"
                               placeholder="Title" value="{{old('title',$tikTok->title)}}">
                        @error('title')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                </div>
                @if(config('default.dual_language'))
                    <div class="col-md-4">
                        <div class="input-style-1">
                            <label for="title_en">Title (English)</label>
                            <input type="text" id="title_en" name="title_en"
                                   placeholder="Title English" value="{{old('title_en',$tikTok->title_en)}}">
                            @error('title_en')
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>
                    </div>
                @endif
                <div class="col-md-4">
                    <div class="input-style-1">
                        <label for="slug">Slug</label>
                        <input type="text" id="slug" name="slug"
                               placeholder="Slug" value="{{old('slug',$tikTok->slug)}}">
                        @error('slug')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                </div>
                <div class="col-md-12 mb-2">
                    <label for="video" class="form-label">video * </label>
                    <input type="hidden" name="video" id="video">
                    @error('video')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                    <button type="button" class="btn btn-outline-primary form-control" id="browseFile">
                        <i class="fa fa-cloud-upload-alt"></i> Please Upload mp4 video
                    </button>
                    <div class="progress mt-3" style="display: none;height: 25px">
                        <div class="progress-bar progress-bar-striped progress-bar-animated"
                             role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"
                             style="width: 75%; height: 100%">75%
                        </div>
                    </div>
                    <div id="video-preview-card" class="mt-2" style="display: none">
                        <video id="videoPreview" src="" controls style="width: 100%;height: auto;"></video>
                    </div>
                </div>
                <div class="col-md-12">
                    <button type="submit" class="btn btn-sm btn-primary">
                        Submit
                    </button>
                </div>
            </div>
        </form>
    </div>
    @push('script')
        <script src="https://cdn.jsdelivr.net/npm/resumablejs@1.1.0/resumable.min.js"></script>

        <script type="text/javascript">
            $('#video').val('')
            let browseFile = $('#browseFile');
            let resumable = new Resumable({
                target: '{{ route('admin.fileUpload.chunkStore') }}',
                query: {_token: '{{ csrf_token() }}'},// CSRF token
                fileType: ['mp4'],
                chunkSize: 2 * 1024 * 1024, // default is 1*1024*1024, this should be less than your maximum limit in php.ini
                headers: {
                    'Accept': 'application/json'
                },
                testChunks: false,
                throttleProgressCallbacks: 1,
                maxFileSize: 50 * 1024 * 1024
            });

            resumable.assignBrowse(browseFile[0]);

            resumable.on('fileAdded', function (file) { // trigger when file picked
                showProgress();
                resumable.upload() // to actually start uploading.
            });

            resumable.on('fileProgress', function (file) { // trigger when file progress update
                updateProgress(Math.floor(file.progress() * 100));
            });

            resumable.on('fileSuccess', function (file, response) { // trigger when file upload complete
                response = JSON.parse(response)
                $('#videoPreview').attr('src', response.url);
                $('#video-preview-card').show();
                $('#video').val(response.path)
                hideProgress()
            });

            resumable.on('fileError', function (file, response) { // trigger when there is any error
                alert('file uploading error.')
            });


            let progress = $('.progress');

            function showProgress() {
                progress.find('.progress-bar').css('width', '0%');
                progress.find('.progress-bar').html('0%');
                progress.find('.progress-bar').removeClass('bg-success');
                progress.show();
            }

            function updateProgress(value) {
                progress.find('.progress-bar').css('width', `${value}%`)
                progress.find('.progress-bar').html(`${value}%`)
            }

            function hideProgress() {
                progress.hide();
            }
        </script>
    @endpush
@endsection

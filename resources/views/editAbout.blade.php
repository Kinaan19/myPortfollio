@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')

@stop

@section('content')

<body>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">About</h3>
        </div>
        <div class="box-body">
            <form action="/update/about" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Section Title</label>
                    <input type="text" class="form-control" placeholder="Enter ..." value="{{ old('sectionTitle',$abouts->aboutTitle) }}"
                        name="sectionTitle">
                </div>
                <div class="form-group">
                    <label>Section Image</label>
                    <input type="file" accept="image/*" class="form-control" name="sectionImg">
                </div>
                <div class="form-group">
                    <label>Content Title</label>
                    <input type="text" class="form-control" placeholder="Enter ..." value="{{ old('contentTitle',$abouts->contentTitle) }}"
                        name="contentTitle">
                </div>
                <div class="form-group">
                    <label>Content Text</label>
                    <textarea class="form-control" rows="3" placeholder="Enter ..." name="contentText">{{ old('contentText',$abouts->contentText) }}</textarea>
                </div>
                <div class="row text-center py-5">
                    <div class="col-sm-12">
                        <button class="btn btn-warning">Modify</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script src="js/app.js"></script>
</body>


@stop

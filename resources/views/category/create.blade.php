@extends('backend.index')

@section('title')
    <title>add New Category</title>
@endsection

@section('js')
<!-- Ckeditor -->
<script src="{{ asset('backend/template/assets/plugins/ckeditor/ckeditor.js')}}"></script>
<script>
    //CKEDITOR
    CKEDITOR.replace( 'editor1' );
    // CUSTOM UPLOAD
    $(".custom-file-input").on("change", function() {
    var fileName = $(this).val().split("\\").pop();
    $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });

    $(document).ready(function(){
    $("#save").click(function(){
        $("button").save();
    });
    });
        //SUBMIT BUTTON DISABLE IF INPUTING
        var enableSubmit = function(ele) {
    $(ele).removeAttr("disabled");
    }
    $('form').submit(function(){
        $('.saveBtn').attr('disabled', true);
    });

</script>
@endsection

@section('content')
<div class="content">
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h2 class="m-0 text-dark">add New Category</h2>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('category.index') }}">Category data</a></li>
                            <li class="breadcrumb-item active">add New Category</li>
                        </ol>
                    </div>
                    <div class="col-md-11">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-header">Info Data</div>
                                <br><br>
                                <form action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                <div class="form-group">
                                    <h6>Category</h6>
                                    <input class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" type="text" name="name" required>
                                    {{-- Error Notification --}}
                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <br>
                                <div class="form-group">
                                    <h6>Description</h6>
                                    <textarea class="form-control {{ $errors->has('description') ? ' is-invalid' : '' }}" name="description" id="editor1" required></textarea>
                                    {{-- Error Notification --}}
                                    @if ($errors->has('description'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('description') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <br>
                                <h6>Baner</h6>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                                        </div>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input {{ $errors->has('baner') ? ' is-invalid' : '' }}" name="baner" id="validatedCustomFile" required>
                                            <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                        </div>
                                    </div>
                                    <span>Please upload a valid image file. Size of image should not be more than 2MB.</span>
                                    {{-- Error Notification --}}
                                    @if ($errors->has('baner'))
                                    <div class="alert alert-danger">
                                        <strong>Whoops!</strong> There were some problems with your input.
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }} Max Size Upload is 2048px.</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    @endif
                                </div>
                                <br><br>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-info btn-rounded btn-outline" data-qt-block="body" id="save">Simpan Data</button>
                                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
                                 </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         </div>
    </div>
</div>
@endsection

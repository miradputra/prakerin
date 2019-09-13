@extends('backend.index')

@section('title')
    <title>edit Category</title>
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
</script>
@endsection

@section('content')
<div class="content">
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h2 class="m-0 text-dark">edit Category</h2>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('category.index') }}">Category data</a></li>
                            <li class="breadcrumb-item active">edit Category</li>
                        </ol>
                    </div>
                <div class="col-md-11">
                    <div class="card">
                        <div class="card-header">Info Data</div>
                        <br><br>
                        <div class="card-body">
                            <form action="{{ route('category.update', $category->id) }}" method="POST" enctype="multipart/form-data">
                                <input type="hidden" value="PATCH" name="_method">
                                {{ csrf_field() }}

                            <div class="form-group">
                                <label for="">Category</label>
                                <input class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" type="text" name="name" value="{{ $category->name }}" required>
                                {{-- Error Notification --}}
                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="">Description</label>
                                <textarea class="form-control {{ $errors->has('description') ? ' is-invalid' : '' }}" name="description" id="editor1" required>{{ $category->description }}</textarea>
                                {{-- Error Notification --}}
                                @if ($errors->has('description'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="">Baner</label><br>
                                @if (isset($category) && $category->baner)
                                    <p>
                                    <img src="{{ asset('/backend/template/assets/images/category/' . $category->baner . '') }}"
                                        style="margin-top:15px; margin-bottom:15px; width:100px; height:100px;" alt="baner"
                                        class="card-img img-fluid mb-4">
                                    </p>
                                @endif
                            </div>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                                </div>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input {{ $errors->has('baner') ? ' is-invalid' : '' }}" name="baner" id="validatedCustomFile">
                                    <label class="custom-file-label" for="validatedCustomFile">{{ $category->baner }}</label>
                                    {{-- Error Notification --}}
                                    @if ($errors->has('baner'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('baner') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                                <br><br>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-info btn-rounded btn-outline" data-qt-block="body">Simpan</button>
                                <button type="submit" class="btn btn-info btn-rounded btn-outline" data-qt-block="body">Kembali <a href="{{route('category.index')}}"></a> </button>
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

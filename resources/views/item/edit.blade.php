@extends('backend.index')

@section('title')
    <title>add New Item</title>
@endsection

@section('js')
{{-- <script src="{{ asset('backend/template/assets/plugins/jquery/jquery-v3.2.1.min.js') }}"></script> --}}
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
    $('[name=enable_quantity]').click(function(){
        $('.div-type_quantity').hide();

        let value=$(this).val();
        if(parseInt(value) === 1){
            $('.div-type_quantity').show();
        }
    })
</script>
@endsection
@section('css')
<style>
    .hidden {
        display: none;
      }
    </style>
@endsection

@section('content')
<div class="content">
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h2 class="m-0 text-dark">add New Item</h2>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('item.index') }}">Item data</a></li>
                            <li class="breadcrumb-item active">add New Item</li>
                        </ol>
                    </div>
                    <div class="col-md-11">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-header">Info Data</div>
                                <br><br>
                                <form action="{{ route('item.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                                    <input type="hidden" value="PATCH" name="_method">
                                    {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="">Item Name</label>
                                    <input class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" type="text" name="name" value="{{ $item->name }}" required>
                                    {{-- Error Notification --}}
                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="">Category</label>
                                    <select id="category" name="category[]" class="form-control {{ $errors->has('category') ? ' is-invalid' : '' }}"  multiple="multiple">
                                        @foreach ($item->category as $data)
                                            <option value="{{ $data->id }}">{{ $data->name }}</option>
                                        @endforeach
                                    </select>
                                    {{-- Error Notification --}}
                                    @if ($errors->has('category'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('category') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="">Description</label>
                                    <textarea class="form-control {{ $errors->has('description') ? ' is-invalid' : '' }}" name="description" id="editor1" required>{{ $item->description }}</textarea>
                                    {{-- Error Notification --}}
                                    @if ($errors->has('description'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('description') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="">Rate</label>
                                    <input class="form-control {{ $errors->has('rate') ? ' is-invalid' : '' }}" type="text" name="rate" value="{{ $item->rate }}" required>
                                    {{-- Error Notification --}}
                                    @if ($errors->has('rate'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('rate') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <br>
                                <label>Media Sample</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                                    </div>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input {{ $errors->has('media_sample') ? ' is-invalid' : '' }}" name="media_sample" id="validatedCustomFile">
                                        <label class="custom-file-label" for="validatedCustomFile">{{ $item->media_sample }}</label>
                                        {{-- Error Notification --}}
                                        @if ($errors->has('media_sample'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('media_sample') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <br>
                                <label>Proposal Page</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                                    </div>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input {{ $errors->has('proposal') ? ' is-invalid' : '' }}" name="proposal" id="validatedCustomFile">
                                        <label class="custom-file-label" for="validatedCustomFile">{{ $item->proposal }}</label>
                                        {{-- Error Notification --}}
                                        @if ($errors->has('proposal'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('proposal') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="">Enable Quantity</label>
                                    <div>
                                        <label>
                                            <input type="radio" name="enable_quantity" value="1">True</label>
                                            <input type="radio" name="enable_quantity" value="0">False</label>
                                        <label>
                                    </div>
                                    {{-- Error Notification --}}
                                    @if ($errors->has('enable_quantity'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('enable_quantity') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group div-type_quantity" style="display:none;">
                                    <label for="">Type Quantity </label>
                                    <input class="form-control {{ $errors->has('type_quantity') ? ' is-invalid' : '' }}" type="text" name="type_quantity" value="{{ $item->enable_quantity }}" required>

                                </div>
                                <br>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-info btn-rounded btn-outline" data-qt-block="body">Simpan Data</button>
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

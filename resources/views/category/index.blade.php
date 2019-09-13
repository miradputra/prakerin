@extends('backend.index')
​
@section('title')
    <title>Category Data</title>
@endsection
​
@section('css')
<!-- JQuery DataTable Css -->
<link rel="stylesheet" href="{{asset('backend/template/assets/plugins/jquery-datatable/dataTables.bootstrap4.min.css')}}">
@endsection

@section('js')
<!-- Jquery DataTable Plugin Js -->
<script src="{{asset('backend/template/assets/bundles/datatablescripts.bundle.js')}}"></script>
<script src="{{asset('backend/template/assets/plugins/jquery-datatable/buttons/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('backend/template/assets/plugins/jquery-datatable/buttons/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('backend/template/assets/plugins/jquery-datatable/buttons/buttons.colVis.min.js')}}"></script>
<script src="{{asset('backend/template/assets/plugins/jquery-datatable/buttons/buttons.html5.min.js')}}"></script>
<script src="{{asset('backend/template/assets/plugins/jquery-datatable/buttons/buttons.print.min.js')}}"></script>
<script src="{{asset('backend/template/assets/plugins/jquery-datatable/buttons.buttons.flash.min.js')}}"></script>
<!-- Custom Js -->
<script src="{{asset('backend/template/assets/js/pages/tables/jquery-datatable.js')}}"></script>
@endsection

@section('content')
<div class="content">
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="c mb-2">
                    <div class="col-sm-6">
                        <h2 class="m-0 text-dark">Category Data</h2>
                    </div>
                    <div class="col-md-11">
                        <div class="card" style="padding:10px">
                                <div class="card-header">Info Data</div>
                                <a href="{{ route('category.create') }}" class="btn btn-primary btn-round btn-md float-right">Tambah Data</a>
                                <br><br>
                                    <div class="card-body">

                                        @if (session('success'))
                                            <div class="alert alert-success">
                                                {!! session('success') !!}
                                            </div>
                                        @endif

                                        @if (session('warning'))
                                            <div class="alert alert-warning">
                                                {!! session('success') !!}
                                            </div>
                                        @endif

                                        @if (session('danger'))
                                            <div class="alert alert-danger">
                                                {!! session('danger') !!}
                                            </div>
                                        @endif

                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                            <thead>
                                                <tr>
                                                    <td>No</td>
                                                    <td>Category</td>
                                                    <td>Description</td>
                                                    <td>Banner</td>
                                                    <td>Action</td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php $no = 1; @endphp
                                                @foreach ($category as $data)
                                                <tr>
                                                    <td>{{ $no++ }}</td>
                                                    <td>{{ $data->name }}</td>
                                                    <td>{!! str_limit($data->description, 50) !!}</td>
                                                    <td><img src="{{ asset('backend/template/assets/images/category/' . $data->baner) }}"
                                                        style="width:115px; height:80px;" alt="foto">
                                                    </td>
                                                    <td>
                                                        <form action="{{ route('category.destroy', $data->id) }}" method="POST">
                                                            @csrf
                                                            <input type="hidden" name="_method" value="DELETE">
                                                            <a href="{{ route('category.edit', $data->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                                            <button class="btn btn-danger btn-sm">Delete</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                           </div>
                      </div>
                 </div>
            </div>
       </div>
   </div>
</div>
@endsection


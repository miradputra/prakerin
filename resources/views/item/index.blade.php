@extends('backend.index')
​
@section('title')
    <title>Item Data</title>
@endsection

@section('css')
<!-- JQuery DataTable Css -->
<link rel="stylesheet" href="{{ asset('assets/backend/assets/plugins/jquery-datatable/dataTables.bootstrap4.min.css')}}">
@endsection

@section('js')
<!-- Jquery DataTable Plugin Js -->
<script src="{{ asset('assets/backend/assets/bundles/datatablescripts.bundle.js')}}"></script>
<script src="{{ asset('assets/backend/assets/plugins/jquery-datatable/buttons/dataTables.buttons.min.js')}}"></script>
<script src="{{ asset('assets/backend/assets/plugins/jquery-datatable/buttons/buttons.bootstrap4.min.js')}}"></script>
<script src="{{ asset('assets/backend/assets/plugins/jquery-datatable/buttons/buttons.colVis.min.js')}}"></script>
<script src="{{ asset('assets/backend/assets/plugins/jquery-datatable/buttons/buttons.html5.min.js')}}"></script>
<script src="{{ asset('assets/backend/assets/plugins/jquery-datatable/buttons/buttons.print.min.js')}}"></script>
<!-- Custom Js -->
<script src="{{ asset('assets/backend/assets/js/pages/tables/jquery-datatable.js')}}"></script>
@endsection

@section('content')
<div class="content">
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h2 class="m-0 text-dark">Item Data</h2>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active">Item Data</li>
                        </ol>
                    </div>

            <div class="col-md-12">
                <div class="card" style="padding:10px">
                        <div class="card-header">Info Data</div>
                        <a href="{{ route('item.create') }}" class="btn btn-primary btn-round btn-md float-right">Create Data</a>
                        <br><br>
                            <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <td>no</td>
                                            <td>Item</td>
                                            <td>Category</td>
                                            <td>Description</td>
                                            <td>Rate</td>
                                            <td>Media Sample</td>
                                            <td>Proposal Page</td>
                                            <td>Type Quantity</td>
                                            <td>Action</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $no = 1; @endphp
                                        @foreach ($item as $row)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $row->name }}</td>
                                            <td>
                                                @foreach ($row->category as $cat)
                                                    <label class="badge badge-info">{{ $cat->name }}</label>
                                                @endforeach
                                            </td>
                                            <td>{!! str_limit($row->description, 40) !!}</td>
                                            <td>{{ $row->rate }}</td>
                                            <td><img src="{{ asset('backend/template/assets/images/item/' . $row->media_sample . '') }}"
                                                style="width:115px; height:80px;" alt="foto">
                                            </td>
                                            <td><img src="{{ asset('backend/template/assets/images/item/' . $row->proposal . '') }}"
                                                style="width:115px; height:80px;" alt="foto">
                                            </td>
                                            <td>{{ $row->type_quantity }}</td>
                                            <td>
                                                <form action="{{ route('item.destroy', $row->id) }}" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <a href="{{ route('item.edit', $row->id) }}" class="btn btn-warning btn-sm">Edit</a>
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

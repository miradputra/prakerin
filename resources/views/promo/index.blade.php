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
                        <h2 class="m-0 text-dark">Promo Data</h2>
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
                                <a href="{{ route('promo.create') }}" class="btn btn-primary btn-round btn-md float-right">Create Data</a>
                                <br>
                                <br>
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
                                                <td>Nama Marketing</td>
                                                <td>Nama Campaign</td>
                                                <td>Durasion start</td>
                                                <td>Duration end</td>
                                                <td>priority</td>
                                                <td>Promo</td>
                                                <td>Media</td>
                                                <td>Total Gross</td>
                                                <td>Sv</td>
                                                <td>Total package</td>
                                                <td>ppn</td>
                                                <td>Total Grand</td>
                                                <td>Type Post</td>
                                                <td>Action</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php $no = 1; @endphp
                                            @foreach ($promo as $data)
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td>{{ $data->marketing_name }}</td>
                                                <td>{{ $data->campaign_name }}</td>
                                                <td>{{ $data->campaign_duration_start }}</td>
                                                <td>{{ $data->campaign_duration_end }}</td>
                                                <td>{{ $data->priority }}</td>
                                                <td>{!! str_limit($data->promo_description, 50) !!}</td>
                                                <td><img src="{{ asset('/backend/template/assets/images/promo/'. $data->media . '') }}"
                                                    style="width:115px; height:80px;" alt="foto">
                                                </td>
                                                <td>{{ $data->gross_total }}</td>
                                                <td>{{ $data->sv }}</td>
                                                <td>{{ $data->package_total }}</td>
                                                <td>{{ $data->ppn }}</td>
                                                <td>{{ $data->grand_total }}</td>
                                                <td>{{ $data->type_post }}</td>
                                                <td>
                                                    <form action="{{ route('promo.destroy', $data->id) }}" method="POST">
                                                        @csrf
                                                        <input type="hidden" name="_method" value="DELETE">
                                                        <a href="{{ route('promo.edit', $data->id) }}" class="btn btn-warning btn-sm">Edit</a>
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
@endsection

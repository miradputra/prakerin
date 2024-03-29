@extends('backend.index')
​
@section('title')
    <title>Manajemen Role</title>
@endsection
​
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h2 class="m-0 text-dark">Manajemen Role</h2>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active">Role</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">

            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-10">
                            @if (session('error'))
                                    {!! session('error') !!}
                            @endif
                            <form role="form" action="{{ route('role.store') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="name"><b>Nama Role</b></label>
                                    <input type="text"name="name"class="form-control {{ $errors->has('name') ? 'is-invalid':'' }}" id="name" required>
                                </div>

                                <div class="card-footer">
                                    <button class="btn btn-primary">Simpan</button>
                                </div>
                            </form>
                        </div>

                    <div class="col-md-10">
                        @if (session('success'))
                        <div class="btn btn-info btn-sm">
                            {!! session('success') !!}
                        </div>
                    @endif
                            <br>
                            <br>
                           <b> List Role</b>
                            <div class="card-body">
                                    <table id="bs4-table" class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                        <tr>
                                            <td>no</td>
                                            <td>Role</td>
                                            <td>Guard</td>
                                            <td>Created At</td>
                                            <td>Aksi</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $no = 1; @endphp
                                        @forelse ($role as $row)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $row->name }}</td>
                                            <td>{{ $row->guard_name }}</td>
                                            <td>{{ $row->created_at }}</td>
                                            <td>
                                                <form action="{{ route('role.destroy', $row->id) }}" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i>Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <td colspan="5" class="text-center">Tidak ada data</td>
                                        </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
​
                            <div class="float-right">
                                {!! $role->links() !!}
                            </div>
                            @slot('footer')
​
                            @endslot
                    </div>
                </div>
            </div>
    </div>
    </div>
@endsection

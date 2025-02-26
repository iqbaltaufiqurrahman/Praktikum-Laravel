@extends('dashboard')
@section('title', 'Courts')
@section('content-title', 'Courts')
@section('isi')
<div class="parent col-md-10 bg-light" id="content-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 mt-3">
                <div class="mb-3"><h1>Courts</h1></div>
                    <div class="card text-white shadow">
                        <div class="card-header bg-black">
                            <a class="btn btn-success mt-2 mb-2" href=""><i class="bi bi-plus-square"></i></a>
                        </div>
                        <div class="card-body bg-dark">
                            <table class="table table-dark table-striped">
                                <thead>
                                    <tr>
                                        <th class="th">No.</th>
                                        <th class="th">Court Type</th>
                                        <th class="th">Court Name</th>
                                        <th class="th">Action</th>
                                    </tr>
                                </thead>
                                @forelse($courts as $data)
                                <tbody>
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $data->type->name }}</td><!--Menampilkan Foreign key Court-Type-->
                                        <td>{{ $data->name }}</td>
                                        <td>
                                            <a class="btn btn-primary"><i class="bi bi-pencil-square"></i></a>
                                            <a class="btn btn-danger"><i class="bi bi-trash3-fill"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                                @empty
                                    <div class="alert alert-danger">
                                        Belum ada Data!
                                    </div>
                                @endforelse  
                            </table>
                        </div>
                        <div class="card-footer bg-black"></div>
                    </div>
            </div>
            <div class="col-md-4 mt-3">
              
            </div>
        </div>
    </div>
</div>
@endsection
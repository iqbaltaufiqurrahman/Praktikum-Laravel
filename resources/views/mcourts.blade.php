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
                            <a class="btn btn-success" href="">Add Data</a>
                        </div>
                        <div class="card-body bg-dark">
                            <table class="table table-dark table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">No.</th>
                                        <th scope="col">Court Type</th>
                                        <th scope="col">Court Name</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>

                                        </td>
                                    </tr>
                                </tbody>
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
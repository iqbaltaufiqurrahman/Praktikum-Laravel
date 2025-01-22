@extends('dashboard')
@section('title', 'Product')
@section('content-title', 'Project')
@section('isi')
<div class="parent col-md-10 bg-light" id="content-area">
    <div class="container-fluid">
        <div class="row">
            <!--Card n Table-->
            <div class="col-md-12 mt-4">
                <div class="mb-4"><h1>Product reviews</h1></div>
                    <div class="card text-white shadow">
                      <div class="card-header bg-black"></div>
                          <div class="card-body bg-dark">
                              <!--Table-->
                              <table class="table table-dark table-striped">
                                  <thead>
                                    <tr>
                                      <th scope="col">Product name</th>
                                      <th scope="col">Review</th>
                                      <th scope="col">Date</th>
                                      <th scope="col">Action</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td class="pr">Radeon 700XD</td>
                                      <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem earum ullam libero.</td>
                                      <td>12/03/2021</td>
                                      <td style="text-align: center;">
                                          <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#btnModal"><i class="bi bi-info-circle text-white"></i></button>
                                          <a href="" class="btn btn-sm btn-secondary"><i class="bi bi-pencil-square"></i></a>
                                          <a href="" class="btn btn-sm btn-danger"><i class="bi bi-trash3-fill"></i></a>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td class="pr">Ryzen 5 7200V</td>
                                      <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi, blanditiis. Nisima Zai</td>
                                      <td>01/11/2022</td>
                                      <td style="text-align: center;">
                                          <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#btnModal"><i class="bi bi-info-circle text-white"></i></button>
                                          <a href="" class="btn btn-sm btn-secondary"><i class="bi bi-pencil-square"></i></a>
                                          <a href="" class="btn btn-sm btn-danger"><i class="bi bi-trash3-fill"></i></a>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td class="pr">Ryzen 7 4300X</td>
                                      <td>Lorem ipsum dolor sit amet consectetur adipisicing. Eligendi earum odit temporibus. Unreals.</td>
                                      <td>23/07/2022</td>
                                      <td style="text-align: center;">
                                          <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#btnModal"><i class="bi bi-info-circle text-white"></i></button>
                                          <a href="" class="btn btn-sm btn-secondary"><i class="bi bi-pencil-square"></i></a>
                                          <a href="" class="btn btn-sm btn-danger"><i class="bi bi-trash3-fill"></i></a>
                                      </td>
                                    </tr>
                                  </tbody>
                              </table>
                              <!--Table End-->
                          </div>
                      <div class="card-footer bg-black"></div>
                  </div>
              </div>
            <!--Card End-->
        </div>
    </div>
</div>
@endsection
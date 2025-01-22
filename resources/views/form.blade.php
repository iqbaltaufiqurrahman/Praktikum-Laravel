@extends('dashboard')
@section('title', 'Service')
@section('content-title', 'Project')
@section('isi')
<div class="parent col-md-10 bg-light" id="content-area">
    <div class="container-fluid">
        <div class="row">
            <!--Form-->
            <div class="col-md-12 mt-4">
                <div class="mb-4"><h1>Add your Review</h1></div>
                    <div class="card shadow">
                        <div class="card-header"></div>
                            <div class="card-body">
                                <form>
                                    <!--Text-->
                                    <div class="form-group">
                                        <label for="textInput1">Product name</label>
                                        <input type="text" class="form-control mt-2" id="textInput1" aria-label="Sizing example input" placeholder="text here...">
                                        <small class="form-text text-muted" id=""></small>
                                    </div>
                                    <!--TextArea-->
                                    <div class="form-group mt-2">
                                        <label for="textarea1">Your review</label>
                                        <textarea class="form-control mt-2" id="textarea1" rows="2" placeholder="text here..."></textarea>
                                    </div>
                                    <!--Select Menu-->
                                    <div class="form-group mt-2">
                                        <label for="select1" class="form-label">Category</label>
                                        <select name="" class="form-control" id="">
                                            <option value="">Graphic Card</option>
                                            <option value="">AMD CPU</option>
                                            <option value="">Motherboard</option>
                                        </select>
                                    </div>
                                    <!--Date Input-->
                                    <div class="form-group mt-2">
                                        <label class="form-label" for="">Date</label>
                                        <input type="date" class="form-control" id="">
                                    </div>
                                    <!--Submit Button-->
                                    <button type="submit" class="btn btn-warning mt-3">Submit</button>
                                </form>
                            </div>
                        <div class="card-footer"></div>
                    </div>
                </div>
            <!--Form End-->
        </div>
    </div>
</div>
@endsection